<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateAdministrator
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
         if (Auth::check()) {
            if(Auth::user()->user_type == 1)
            {
                
                return $next($request); 
            }
            elseif (Auth::user()->user_type == 2){
              return redirect('/home');  
            }
           
        }
        else{
            return redirect('/login');
        }
       
    }
}
