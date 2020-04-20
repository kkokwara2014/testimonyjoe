<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function testimonyjoe(){
        return view('frontend.about.testimonyjoe');
    }

    public function holyghoststudio(){
        return view('frontend.about.holyghoststudio');
    }

    public function rental(){
        return view('frontend.about.rental');
    }
}
