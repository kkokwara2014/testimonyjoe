<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=['title','venue','description','eventdate','eventtime','user_id','image'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
