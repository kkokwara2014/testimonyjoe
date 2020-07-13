<?php

namespace App\Http\Controllers;

use App\Album;
use App\Albumcategory;
use App\Http\Requests\AlbumStoreRequest;
use App\Http\Requests\AlbumUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Image;
use Illuminate\Support\Str;

class AlbumController extends Controller
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
        $albums = Album::latest()->get();
        return view('admin.albums.index', array('user' => Auth::user()), compact('albums'));
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
    public function store(AlbumStoreRequest $request)
    {

        if ($request->hasFile('albumimage')) {
             //for album image
             $albumimage=$request->file('albumimage');
             $albumimagefilename = time() . '.' . $request->albumimage->getClientOriginalExtension();
             Image::make($albumimage)->resize(600, 600)->save(public_path('album_images/' . $albumimagefilename));

            $album=new Album;
            $album->title=$request->title;
            $album->slug=Str::slug($request->title);
            $album->artistfullname=$request->artistfullname;
            $album->yearofpub=$request->yearofpub;
            $album->user_id=$request->user_id;
            $album->albumimage=$albumimagefilename;
            $album->save();

        }

         return redirect()->route('album.index')->with('success','New Album added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        $album = Album::find($album->id);
        return view('admin.albums.show', array('user' => Auth::user()), compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        $album = Album::where('id',$album->id)->first();
        return view('admin.albums.edit', array('user' => Auth::user()), compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(AlbumUpdateRequest $request, Album $album)
    {
        if ($request->hasFile('albumimage')) {
            //for album image
            $albumimage=$request->file('albumimage');
            $albumimagefilename = time() . '.' . $request->albumimage->getClientOriginalExtension();
            Image::make($albumimage)->resize(600, 600)->save(public_path('album_images/' . $albumimagefilename));

           $album=Album::find($album->id);
           $album->title=$request->title;
           if ($request->existing_title!=$request->title) {
               $album->slug=Str::slug($request->title);
           }
           $album->slug=$album->slug;
           $album->artistfullname=$request->artistfullname;
           $album->yearofpub=$request->yearofpub;
           $album->user_id=$request->user_id;
           $album->albumimage=$albumimagefilename;
           $album->save();

       }else{
        $album=Album::find($album->id);
        $album->title=$request->title;
        if ($request->existing_title!=$request->title) {
            $album->slug=Str::slug($request->title);
        }
        $album->slug=$album->slug;
        $album->artistfullname=$request->artistfullname;
        $album->yearofpub=$request->yearofpub;
        $album->user_id=$request->user_id;
        $album->albumimage=$request->existing_albumimage;
        $album->save();
       }


        return redirect()->route('album.index')->with('success','New Album added Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
         //deleting files from folder
         File::delete([public_path('album_images/' . $album->albumimage)]);

         //deleting  files from the database
         $album->delete();

         //redirecting page
         return redirect()->back()->with('deleted','Album deleted successfully!');
    }
}
