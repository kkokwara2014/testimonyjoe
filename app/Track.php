<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $fillable=['title','album_id','filename'];

    public function album(){
        return $this->belongsTo(Album::class);
    }
}
