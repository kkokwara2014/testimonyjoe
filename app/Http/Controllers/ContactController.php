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
}
