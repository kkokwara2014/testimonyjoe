<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Albumcategory extends Model
{
    protected $fillable=['name'];

    public function album(){
        return $this->hasMany(Album::class);
    }
}
