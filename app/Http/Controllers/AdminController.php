<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function logout()
    {
        session()->forget('admin');
        createMsg(1, 'Вы вышли из админки!');
        return redirect()->route('login');
    }
}
