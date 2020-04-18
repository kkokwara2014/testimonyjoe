<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipcategory extends Model
{
    
    public function equipment(){
        return $this->hasMany(Equipment::class);
    }
}
