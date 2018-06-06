<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        //print_r(\Auth::user()); 
        //echo \Auth::user()->users_role_id;
        //exit;
        
        if (\Auth::user()->users_role_id == 1) {
            return $next($request);
        }
        
        //return redirect()->guest('/');
        return response()->view('errors.403', [], 403);
    }

}
