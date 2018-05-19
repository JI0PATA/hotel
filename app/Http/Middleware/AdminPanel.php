<?php

namespace App\Http\Middleware;

use Closure;

class AdminPanel
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
        if (!session()->has('admin')) {
            createMsg(0, 'Доступна только для администратора!');
            return redirect()->route('login');
        }

        return $next($request);
    }
}
