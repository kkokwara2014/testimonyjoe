<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=['bookingref','fullname','email','phone','eventdate','eventtime','eventtype','location','additionalinfo'];
}
