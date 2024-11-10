<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class Merchant
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('merchant')->user()){
            return $next($request);
        }
        return redirect()->route('merchant.login');
    }
}
