<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Album;
use App\Albumcategory;
use Image;

use Illuminate\Support\Facades\Auth;

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
            'albumtitle' => 'required',
            'albumcategory_id' => 'required',
            'albumimage' => 'required|image|mimes:png,jpg,jpeg|max:10000',
            'audio' => 'required|file|mimes:audio/mpeg,mpga,mp3,wav,aac',
           
        ]);

        if ($request->hasFile('albumimage')) {
            $image = $request->file('albumimage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(600, 600)->save(public_path('albums/album_images/' . $imageName));
            $formInput['albumimage'] = $imageName;
        }

        if ($request->hasFile('audio')) {
            $audiofile = $request->file('audio');
            $destination_path=public_path().'/albums/album_files';
            $extension=$request->file('audio')->getClientOriginalExtension();
            $files=$request->file('audio')->getClientOriginalName();
            $audioFileName=$files.'_'.time().'.'.$extension;
            $audiofile->move($destination_path,$audioFileName);
            // $filenameWithTime = time() . '_' . $request->filename->getClientOriginalName();
            // $filenameToStore = $request->filename->storeAs('public/albums', $filenameWithTime);
        }

        //    create an instance of Album
        $album = new Album;
        $album->title = $request->albumtitle;
        $album->description = $request->description;
        $album->user_id = $request->user_id;
        $album->albumcategory_id = $request->albumcategory_id;
        $album->albumimage = $formInput['albumimage'];
        // $album->filename = $filenameToStore;
        $album->filename = $audioFileName;

        $album->save();

        
        return redirect()->route('album.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
