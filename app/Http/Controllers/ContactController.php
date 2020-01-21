<?php

namespace App\Http\Controllers;

use App\Repositories\Contact\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $cont;

    public function __construct(ContactRepository $cont)
    {
        $this->cont=$cont;
    }

public function getAllContacts(){

    $allcontacts=$this->cont->getAll();

    return response()->json($allcontacts);
}

public function saveContact(Request $request){
    $data=([
        'sender'=>$request->sender,
        'email'=>$request->email,
        'messagebody'=>$request->messagebody,
    ]);

    $this->cont->create($data);

    return redirect()->route('contact')->with('success','Your message has been sent!');

}

public function removeContact($id){
    $this->cont->delete($id);

    return back();
}
}
