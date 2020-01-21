<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct()
    {

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


    }
}
