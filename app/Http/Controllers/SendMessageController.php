<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class SendMessageController extends Controller
{

    public function contactus(){
        return view('frontend.contact');
    }

    public function savecontact(Request $request){

        $contact=new Contact;
        $contact->sender=$request->sender;
        $contact->email=$request->email;
        $contact->messagebody=$request->messagebody;

        $contact->save();

        return redirect()->route('contactus')->with('success','Your message has been sent successfully!');
    }
}
