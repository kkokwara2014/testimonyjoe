<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trackcategory extends Model
{


    public function tracks(){
        return $this->hasMany(Track::class);
    }
}
