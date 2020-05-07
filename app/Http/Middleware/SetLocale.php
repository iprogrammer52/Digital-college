<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Support\Facades\Auth;
class SetLocale
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
        if (!empty(Auth::user())) {
            App::setLocale(Auth::user()->lang ?? session('locale'));
        } else {
            App::setLocale(session('locale'));
        }

        return $next($request);
    }
}
