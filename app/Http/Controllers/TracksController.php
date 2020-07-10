<?php

namespace App\Http\Controllers;

use App\Album;
use App\Track;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TracksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tracks=Track::latest()->get();
        $albums=Album::orderBy('title','asc')->get();

        return view('admin.tracks.index',array('user'=>Auth::user()),compact('tracks','albums'));
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
        $this->validate($request,[
            'title'=>'required',
            'album_id'=>'required',
            'filename'=>'required|file|mimes:audio/mpeg,mpga,mp3,wav,aac,wma'
        ]);

        if ($request->hasFile('filename')) {
            $trackfile=$request->file('filename');
            $fileName=$trackfile->getClientOriginalName();
            $fileName = rand() .'.' . $trackfile->getClientOriginalExtension();


            // $filenameToStore = $request->filename->storeAs('public/album_tracks', $fileName);
            $filenameToStore = $request->filename->move(public_path('album_tracks/'), $fileName);
        }

        $track=new Track;
        $track->title=$request->title;
        $track->slug=str_slug($request->title);
        $track->album_id=$request->album_id;
        $track->filename=$filenameToStore;

        $track->save();

        return redirect()->route('tracks.index')->with('success','New Track has been uploaded successfully!');
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
    public function destroy(Track $track)
    {
        //deleting files from folder
        File::delete([public_path('album_tracks/' . $track)]);

        //deleting  files from the database
        $track->delete();

        //redirecting page
        return redirect()->back();
    }
}
