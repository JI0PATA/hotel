<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelRoom extends Model
{
    public $timestamps = false;

    public function room()
    {
        return $this->belongsTo('App\Room');
    }
}
