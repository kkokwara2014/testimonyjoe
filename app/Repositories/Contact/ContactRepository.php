<?php

namespace App\Repositories\Contact;

interface ContactRepository{

    public function getAll();
    public function getById($id);
    public function create(array $data);
    public function delete($contactId);

}
