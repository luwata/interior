<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class CheckRoles
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
        if ( Auth::check() && Auth::user()->role === 'administrator' )
        {
            return $next($request);
        }

        return redirect()->route('home')->with('message', 'no access');
    }
}
