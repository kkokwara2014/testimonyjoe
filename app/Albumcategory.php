<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Albumcategory extends Model
{
    

    public function album(){
        return $this->hasMany(Album::class);
    }
}
