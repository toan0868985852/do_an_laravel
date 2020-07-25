<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Adminlogin
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
        if (Auth::check() && Auth::user()->role == 1){
            return $next($request);
        }else if (Auth::check() && Auth::user()->role == 2){
            return redirect()->route('home');
        }else {
            return redirect('login');
        }
    }
}
