<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    protected $fillable=['title','description','albumimage','user_id','albumcategory_id','filename'];

    public function albumcategory(){
        return $this->belongsTo(Albumcategory::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function track(){
        return $this->hasMany(Track::class);
    }
}
