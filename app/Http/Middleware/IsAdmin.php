<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd($role);
        // dd(auth()->user());

        if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->isAdmin == 1) {
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
