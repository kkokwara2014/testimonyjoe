<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=['fullname','email','phone','eventdate','eventtime','location','additionalinfo'];
}
