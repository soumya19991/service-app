<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Customer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
        if (auth()->check() && auth()->user()->role_id === 3) {
            return $next($request);
        } else {
            return response()->json('access denied');
        }
        // return redirect()->route('login')->with('error', 'You are not authorized to access this page.');
    }
}
