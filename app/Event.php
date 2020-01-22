<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=['name','price','description','user_id','image'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
