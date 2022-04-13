<?php

namespace App\Http\Middleware;

use Closure;

class CheckType
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
        if($request->type!=2) {
           // return response()->json('Please enter valid type');
          //dd("Please enter valid type");      
          die("Access Denied for this user");
        } else {
           return $next($request);
        }
        
    }
}
