<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index($id)
    {
        return view('modules.hotels.view');
    }
}
