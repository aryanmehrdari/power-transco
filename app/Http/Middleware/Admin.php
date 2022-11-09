<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if (!$user->isAdmin()) {
            setcookie('laravel_session',time(),'/cp/login','/cp/dashboard');
            return redirect()->route('home');

        }else{
            return $next($request);
        }
    }
}
