<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
    
        if(!isset($_SESSION['admin']) || $_SESSION['admin'] != "admin"){
    
            return redirect('/login');   // if not exist
        
        }
    
        return $next($request);     // if exist proceed to next step

  }
}
