<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Album;
use App\Albumcategory;
use Image;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AlbumController extends Controller
{
    public function __construct()
    {
        $this->middleware(['superadmin','admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums=Album::orderBy('created_at','desc')->get();
        $albumcategories=Albumcategory::orderBy('name','asc')->get();
        return view('admin.albums.index',array('user'=>Auth::user()),compact('albums','albumcategories'));
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
    public function store(Request $request)
    {
        $formInput = $request->except('albumimage');
        $this->validate($request, [
            'title' => 'required',
            'artistfullname' => 'required',
            'yearofpub' => 'required',
            'albumcategory_id' => 'required',
            'albumimage' => 'required|image|mimes:png,jpg,jpeg|max:10000',
        ]);

        if ($request->hasFile('albumimage')) {
            $image = $request->file('albumimage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(600, 600)->save(public_path('album_images/' . $imageName));
            $formInput['albumimage'] = $imageName;
        }

        //    create an instance of Album
        $album = new Album;
        $album->title = $request->title;
        $album->slug = str_slug($request->title);
        $album->artistfullname = $request->artistfullname;
        $album->yearofpub = $request->yearofpub;
        $album->albumcategory_id = $request->albumcategory_id;
        $album->user_id = $request->user_id;
        $album->albumimage = $formInput['albumimage'];

        $album->save();


        return redirect()->route('album.index')->with('success','New Album created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album=Album::find($id);
        $albumcategories=Albumcategory::orderBy('name','asc')->get();

        return view('admin.albums.show',array('user'=>Auth::user()),compact('album','albumcategories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album=Album::where('id',$id)->first();
        $albumcategories=Albumcategory::orderBy('name','asc')->get();

        return view('admin.albums.edit',array('user'=>Auth::user()),compact('album','albumcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formInput = $request->except('albumimage');
        $this->validate($request, [
            'title' => 'required',
            'artistfullname' => 'required',
            'yearofpub' => 'required',
            'albumcategory_id' => 'required',
            'albumimage' => 'required|image|mimes:png,jpg,jpeg|max:10000',
        ]);

        if ($request->hasFile('albumimage')) {
            $image = $request->file('albumimage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(600, 600)->save(public_path('album_images/' . $imageName));
            $formInput['albumimage'] = $imageName;
        }

        //    create an instance of Album
        $album = Album::find($id);
        $album->title = $request->title;
        $album->slug = str_slug($request->title);
        $album->artistfullname = $request->artistfullname;
        $album->yearofpub = $request->yearofpub;
        $album->albumcategory_id = $request->albumcategory_id;
        $album->user_id = $request->user_id;
        if ($request->hasFile('albumimage')=='') {
            $album->albumimage = $request->albumimage;
        }else{
            $album->albumimage = $formInput['albumimage'];
        }

        $album->save();


        return redirect()->route('album.index')->with('success','New Album Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        //deleting files from folder
        File::delete([public_path('album_images/' . $album)]);

        //deleting  files from the database
        $album->delete();

        //redirecting page
        return redirect()->back();
    }
}
