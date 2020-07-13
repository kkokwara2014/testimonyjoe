<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tracks(){
        return $this->hasMany(Track::class);
    }
}
