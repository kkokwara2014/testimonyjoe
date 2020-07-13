<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\GalleryStoreRequest;
use App\Http\Requests\GalleryUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Image;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.gallery.index', array('user' => Auth::user()), compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryStoreRequest $request)
    {
        if ($request->hasFile('image')) {
            //for gallery image
            $galleryimage=$request->file('image');
            $imagefilename = time() . '.' . $request->image->getClientOriginalExtension();
            Image::make($galleryimage)->resize(600, 600)->save(public_path('gallery_images/' . $imagefilename));

           $gallery=new Gallery;
           $gallery->title=$request->title;
           $gallery->slug=Str::slug($request->title);
           $gallery->description=$request->description;
           $gallery->user_id=Auth::user()->id;
           $gallery->image=$imagefilename;
           $gallery->save();

       }

        return redirect()->route('gallery.index')->with('success','New Gallery added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        $gallery = Gallery::find($gallery->id);
        return view('admin.gallery.show', array('user' => Auth::user()), compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $gallery = Gallery::where('id',$gallery->id)->first();
        return view('admin.gallery.edit', array('user' => Auth::user()), compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryUpdateRequest $request, Gallery $gallery)
    {
        if ($request->hasFile('image')) {
            //for gallery image
            $galleryimage=$request->file('image');
            $imagefilename = time() . '.' . $request->image->getClientOriginalExtension();
            Image::make($galleryimage)->resize(600, 600)->save(public_path('gallery_images/' . $imagefilename));

           $gallery=gallery::find($gallery->id);
           $gallery->title=$request->title;
           if ($request->existing_title!=$request->title) {
                $gallery->slug=Str::slug($request->title);
            }
           $gallery->slug=$gallery->slug;
           $gallery->description=$request->description;
           $gallery->user_id=Auth::user()->id;
           $gallery->image=$imagefilename;
           $gallery->save();

       }else{
        $gallery=gallery::find($gallery->id);
        $gallery->title=$request->title;
        if ($request->existing_title!=$request->title) {
            $gallery->slug=Str::slug($request->title);
        }
        $gallery->slug=$gallery->slug;
        $gallery->description=$request->description;
        $gallery->user_id=Auth::user()->id;
        $gallery->image=$request->existing_image;
        $gallery->save();
    }

        return redirect()->route('gallery.index')->with('success','Gallery updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
         //deleting files from folder
         File::delete([public_path('gallery_images/' . $gallery->image)]);

         //deleting  files from the database
         $gallery->delete();

         //redirecting page
         return redirect()->back()->with('deleted','Gallery deleted successfully!');
    }
}
