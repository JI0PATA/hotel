<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if ($request->login === 'admin' && $request->password === 'admin') {
            session()->put('admin', 1);
            createMsg(1, 'Вы успешно авторизовались!');
            return redirect()->route('admin.index');
        } else {
            createMsg(0, 'Неверные данные');
            return back();
        }
    }
}
