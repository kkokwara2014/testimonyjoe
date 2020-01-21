<?php

namespace App\Repositories\Contact;

use App\Contact;

class EloquentContact implements ContactRepository
{
    private $contact;

    public function __construct(Contact $contact)
    {
        $this->contact=$contact;
    }

    public function getAll(){
        return $this->contact->all();
    }
    public function getById($id){
        return $this->contact->findById($id);
    }

    public function create(array $data){
        return $this->contact->create($data);
    }

    public function delete($contactId){

    }
}
