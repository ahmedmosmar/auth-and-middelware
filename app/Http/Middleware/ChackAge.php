<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class ChackAge
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
        
        if(Auth::user()->age < 15){
            return redirect()->back();
        }
        return $next($request);
    }
}
