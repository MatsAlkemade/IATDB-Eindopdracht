<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckBlocked
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->blocked) {
            auth()->logout();
            
            $message = 'Je account is opgeschort. Neem contact op met een administrator.';
            
            return redirect()->route('login')->withErrors([$message]);
        }
            
            
        return $next($request);
    }
}
