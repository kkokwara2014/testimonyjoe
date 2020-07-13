<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\EventStoreRequest;
use App\Http\Requests\EventUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Image;

class EventController extends Controller
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
        $events = Event::latest()->get();
        return view('admin.events.index', array('user' => Auth::user()), compact('events'));
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
    public function store(EventStoreRequest $request)
    {
        if ($request->hasFile('image')) {
            //for event image
            $eventimage=$request->file('image');
            $imagefilename = time() . '.' . $request->image->getClientOriginalExtension();
            Image::make($eventimage)->resize(600, 600)->save(public_path('event_images/' . $imagefilename));

           $event=new Event;
           $event->title=$request->title;
           $event->slug=Str::slug($request->title);
           $event->venue=$request->venue;
           $event->eventdate=$request->eventdate;
           $event->eventtime=$request->eventtime;
           $event->description=$request->description;
           $event->user_id=Auth::user()->id;
           $event->image=$imagefilename;
           $event->save();

       }

        return redirect()->route('event.index')->with('success','New Event added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $event = Event::find($event->id);
        return view('admin.events.show', array('user' => Auth::user()), compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $event = Event::where('id',$event->id)->first();
        return view('admin.events.edit', array('user' => Auth::user()), compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(EventUpdateRequest $request, Event $event)
    {
        if ($request->hasFile('image')) {
            //for event image
            $eventimage=$request->file('image');
            $imagefilename = time() . '.' . $request->image->getClientOriginalExtension();
            Image::make($eventimage)->resize(600, 600)->save(public_path('event_images/' . $imagefilename));

           $event=Event::find($event->id);
           $event->title=$request->title;
           if ($request->existing_title!=$request->title) {
                $event->slug=Str::slug($request->title);
            }
           $event->slug=$event->slug;
           $event->venue=$request->venue;
           $event->eventdate=$request->eventdate;
           $event->eventtime=$request->eventtime;
           $event->description=$request->description;
           $event->user_id=Auth::user()->id;
           $event->image=$imagefilename;
           $event->save();

       }else{
        $event=Event::find($event->id);
        $event->title=$request->title;
        if ($request->existing_title!=$request->title) {
            $event->slug=Str::slug($request->title);
        }
        $event->slug=$event->slug;
        $event->venue=$request->venue;
        $event->eventdate=$request->eventdate;
        $event->eventtime=$request->eventtime;
        $event->description=$request->description;
        $event->user_id=Auth::user()->id;
        $event->image=$request->existing_image;
        $event->save();
    }

        return redirect()->route('event.index')->with('success','Event updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //deleting files from folder
        File::delete([public_path('event_images/' . $event->image)]);

        //deleting  files from the database
        $event->delete();

        //redirecting page
        return redirect()->back()->with('deleted','Event deleted successfully!');
    }
}
