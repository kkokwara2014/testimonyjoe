<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function album(){
        return $this->belongsTo(Album::class);
    }
    public function trackcategory(){
        return $this->belongsTo(Trackcategory::class);
    }
}
