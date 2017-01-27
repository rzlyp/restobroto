<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->role == 'Admin'){ 
              return redirect('/admin');
             }elseif (Auth::user()->role == 'Kasir') {
               return redirect('/kasir');
             } elseif (Auth::user()->role == 'Pelayan') {
               return redirect('/pelayan');
             }elseif (Auth::user()->role == 'Pantry') {
               return redirect('/pantry');
             }elseif (Auth::user()->role == 'CS') {
               return redirect('/customer');
             }elseif (Auth::user()->role == 'Koki') {
               return redirect('/koki');
             }  
        }

        return $next($request);
    }
}
