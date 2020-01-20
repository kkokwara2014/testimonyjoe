<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class Admin
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
        // Auth::user()->role->id != 1
        if (Auth::check() && (Auth::user()->role->id != 1)&& (Auth::user()->role->id != 2)) {
            return redirect()->back();
        }
        return $next($request);
    }
}
