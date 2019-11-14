<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function abouttestimonyjoe(){
        return view('frontend.abouttestimonyjoe');
    }
    public function aboutholyghoststudio(){
        return view('frontend.aboutstudio');
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
    public function aboutrentals(){
        return view('frontend.aboutrentals');
    }
    public function booking(){
        return view('frontend.booking');
    }
}
