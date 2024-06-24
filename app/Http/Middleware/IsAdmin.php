<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (auth()->user() && auth()->user()->isAdmin == $role) {
            # code...
            // dd(auth()->user()->isAdmin);
            // to_route('admin');

            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
