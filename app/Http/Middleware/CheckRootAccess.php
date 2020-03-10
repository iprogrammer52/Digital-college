<?php

namespace App\Http\Middleware;

use Closure;

class CheckRootAccess
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
        // if (Auth::user()->role != 'root') {
        //     return route('home');
        // }

        return $next($request);
    }
}
