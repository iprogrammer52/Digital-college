<?php

namespace App\Http\Middleware;

use Closure;

class AccessDenied
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
        return view('access_denied');
    }
}
