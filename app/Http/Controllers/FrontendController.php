<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.tj');
    }

    public function gallery(){
        return view('frontend.gallery');
    }
    public function album(){
        return view('frontend.album');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function event(){
        return view('frontend.event');
    }

    public function booking(){
        return view('frontend.booking');
    }
}
