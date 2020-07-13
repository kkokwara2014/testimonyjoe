<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function equipcategory(){
        return $this->belongsTo(Equipcategory::class);
    }


}
