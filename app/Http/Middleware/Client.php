<?php

namespace App\Http\Middleware;

use Closure;

class Client
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){

    session_start();
    
        if(!isset($_SESSION['client'])){
    
            return redirect('/');   // if not exist
        
        }
    
        return $next($request);     // if exist proceed to next step

  }
}
