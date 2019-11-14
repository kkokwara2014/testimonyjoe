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
}
