<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $hotels = Hotel::with(['rooms'])->orderByDesc('id')->limit(10);

        if ($request->get('search'))
            $hotels->where('name', 'LIKE', '%' . $request->get('search') . '%')
                ->orWhere('city', 'LIKE', '%' . $request->get('search') . '%');

        $hotels = $hotels->get();

        if ($request->get('room') != 0)
            $hotels = $hotels->reject(function($value) {
                return !$value->rooms->contains($GLOBALS['request']->get('room'));
            });

        return view('index', [
            'hotels' => $hotels,
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }
}
