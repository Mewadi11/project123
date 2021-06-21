<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request  $_REQUEST
     * @param \closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->path()=="login"&& $request->session()->has('user'))
        {
            return redirect('/');
        }
        return $next($request);
    }
}

