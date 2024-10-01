<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotGuest
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('guest')->check()) {
            return redirect('/guest/login');
        }

        return $next($request);
    }
}

