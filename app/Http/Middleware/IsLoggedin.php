<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class IsLoggedin
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('merchant')->check()){
            if(Auth::guard('merchant')->user()->verify != 1){
                return redirect()->route('merchant.twofactor');
            }
            return redirect()->route('merchant.dashboard');
        }elseif(Auth::guard('rider')->check()){
            return redirect()->route('rider.dashboard');
        }
        return $next($request);
    }
      
}
