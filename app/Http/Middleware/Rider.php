<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
class Rider
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('rider')->user()){
            return $next($request);
        }
        return redirect()->route('rider.login');
    }
}
