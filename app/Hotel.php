<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'star_count',
        'city',
        'address',
        'description',
        'img'
    ];

    public function services()
    {
        return $this->belongsToMany('App\Service', 'hotel_services');
    }

    public function rooms()
    {
        return $this->belongsToMany('App\Room', 'hotel_rooms');
    }

    public function price()
    {
        return $this->hasMany('App\HotelRoom');
    }
}
