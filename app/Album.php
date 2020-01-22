<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{


    public function albumcategory(){
        return $this->belongsTo(Albumcategory::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
