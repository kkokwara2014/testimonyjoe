<?php

namespace App\Http\Controllers;

use App\Album;
use App\Http\Requests\TrackStoreRequest;
use App\Http\Requests\TrackUpdateRequest;
use App\Track;
use App\Trackcategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class TrackController extends Controller
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
        $tracks=Track::latest()->get();
        $albums=Album::orderBy('title','asc')->get();
        $trackcategories=Trackcategory::orderBy('name','asc')->get();
        return view('admin.tracks.index', array('user' => Auth::user()), compact('tracks','albums','trackcategories'));
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
    public function store(TrackStoreRequest $request)
    {
        if ($request->hasFile('filename')) {
            //for audio filename
            $trackfilename = time() . '.' . $request->filename->getClientOriginalExtension();
            $request->filename->storeAs('public/tracks', $trackfilename);
            // $filenameToStore = $request->filename->storeAs('public/tracks', $trackfilename);

           $track=new Track;
           $track->title=$request->title;
           $track->slug=Str::slug($request->title);
           $track->user_id=Auth::user()->id;
           $track->album_id=$request->album_id;
           $track->trackcategory_id=$request->trackcategory_id;
           $track->filename=$trackfilename;
           $track->save();

       }

        return redirect()->route('track.index')->with('success', 'New Track added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function show(Track $track)
    {
        $track = Track::find($track->id);
        return view('admin.tracks.show', array('user' => Auth::user()), compact('track'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function edit(Track $track)
    {
        $track = Track::where('id',$track->id)->first();
        $albums=Album::orderBy('title','asc')->get();
        $trackcategories=Trackcategory::orderBy('name','asc')->get();
        return view('admin.tracks.edit', array('user' => Auth::user()), compact('track','albums','trackcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function update(TrackUpdateRequest $request, Track $track)
    {
        if ($request->hasFile('filename')) {
            //for audio filename
            $trackfilename = time() . '.' . $request->filename->getClientOriginalExtension();
            $request->filename->storeAs('public/tracks', $trackfilename);
            // $filenameToStore = $request->filename->storeAs('public/tracks', $trackfilename);


           $track=Track::find($track->id);
           $track->title=$request->title;
           $track->slug=Str::slug($request->title);
           if ($request->existing_title!=$request->title) {
            $track->slug=Str::slug($request->title);
           }
           $track->slug=$track->slug;
           $track->user_id=Auth::user()->id;
           $track->album_id=$request->album_id;
           $track->trackcategory_id=$request->trackcategory_id;
           $track->filename=$trackfilename;
           $track->save();

       }else{

           $track=Track::find($track->id);
           $track->title=$request->title;
           $track->slug=Str::slug($request->title);
           if ($request->existing_title!=$request->title) {
            $track->slug=Str::slug($request->title);
           }
           $track->slug=$track->slug;
           $track->user_id=Auth::user()->id;
           $track->album_id=$request->album_id;
           $track->trackcategory_id=$request->trackcategory_id;
           $track->filename=$request->existing_filename;
           $track->save();
    }

        return redirect()->route('track.index')->with('success','Track updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function destroy(Track $track)
    {
        //deleting files from folder
        File::delete([public_path('storage/tracks/' . $track->filename)]);

       //deleting  files from the database
         $track->delete();

         //redirecting page
         return redirect()->back()->with('deleted','Track deleted successfully!');
    }
}
