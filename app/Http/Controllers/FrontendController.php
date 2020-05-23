<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Country;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function gallery(){
        return view('frontend.gallery');
    }
    public function album(){
        return view('frontend.album');
    }
    // public function contact(){
    //     return view('frontend.contact');
    // }
    public function event(){
        return view('frontend.event');
    }

    public function booking(){
        $locations=Country::orderBy('name','asc')->get();
        return view('frontend.booking',compact('locations'));
    }

    public function savebooking(Request $request){

        $bookingRef=rand(499738,964726);

        $eventdate=$request->eventdate;
        if ($eventdate<=date('m/d/Y')) {
            return redirect()->back()->with('failure','Please, choose a future date as '.$eventdate.' is not ok.')->withInput();
        }else{

            $booking=new Booking;
            $booking->bookingref=$bookingRef;
            $booking->fullname=$request->fullname;
            $booking->email=$request->email;
            $booking->phone=$request->phone;
            $booking->eventtype=$request->eventtype;
            $booking->eventdate=$eventdate;
            $booking->eventtime=$request->eventtime;
            $booking->location=$request->location;
            $booking->additionalinfo=$request->additionalinfo;
            $booking->save();

            return redirect()->route('bookings')->with('success','Your booking with ref #'.$bookingRef.' has been sent!');

        }
    }
}
