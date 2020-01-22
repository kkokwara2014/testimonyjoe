<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        $user=Auth::user();
        $bookings=Booking::orderBy('created_at','desc')->get();

        return view('admin.bookings.index',compact('bookings','user'));
    }

    public function saveBooking(Request $request){
        $this->validate($request,[
            'fullname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'eventdate'=>'required',
            'eventtime'=>'required',
            'location'=>'required',
        ]);

            $bookingRef=rand(499738,964726);
        $booking=new Booking;
        $booking->bookingref=$bookingRef;
        $booking->fullname=$request->fullname;
        $booking->email=$request->email;
        $booking->phone=$request->phone;
        $booking->eventdate=$request->eventdate;
        $booking->eventtime=$request->eventtime;
        $booking->location=$request->location;
        $booking->additionalinfo=$request->additionalinfo;
        $booking->save();

        return redirect()->route('booking')->with('success','Your booking with ref #'.$bookingRef.' has been sent!');
    }

    public function destroy($id){
        Booking::where('id',$id)->delete();

        return redirect()->back();
    }
}
