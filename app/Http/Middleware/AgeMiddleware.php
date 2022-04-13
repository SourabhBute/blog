<?php

namespace App\Http\Middleware;

use Closure;

class AgeMiddleware
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
        if($request->age>10) {
            //echo "Age is greater than 10";
            return redirect('nameView');
        } else {
            echo "Age is not greater than 10";
        }

        return $next($request);
    }
}
