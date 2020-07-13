<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactStoreRequest;
use Illuminate\Http\Request;

class ContactusController extends Controller
{

    public  function contactus(){
        return view('frontend.contact');
    }

    public  function store(ContactStoreRequest $request){

        $contact=new Contact;
        $contact->sender=$request->sender;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->body=$request->body;
        $contact->save();

        return redirect()->back()->with('success','Your message has been successfully! Thank you.');
    }
}
