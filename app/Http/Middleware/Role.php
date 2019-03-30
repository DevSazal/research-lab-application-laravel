<?php

namespace App\Http\Middleware;

use Closure;

class Role
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
        // echo "Hi, Role is on";
        if (auth()->user()->role > 2){
            return $next($request);
        }
        return redirect('/app');
    }
}
