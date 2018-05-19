<?php

namespace App\Http\Middleware;

use Closure;

class LoginGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('admin')) {
            createMsg(0, 'Доступна только для неавторизованных пользователей!');
            return redirect()->route('admin.index');
        }

        return $next($request);
    }
}
