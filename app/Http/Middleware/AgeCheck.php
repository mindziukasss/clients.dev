<?php

namespace App\Http\Middleware;

use Closure;

class AgeCheck
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
//        dd(auth()->user());

        if(auth()->user()->age > 30)
        return $next($request);

      abort(403);
    }
}
