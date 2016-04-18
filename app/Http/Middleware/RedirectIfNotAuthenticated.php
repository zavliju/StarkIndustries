<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;
class RedirectIfNotAuthenticated
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
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/');
        // }

        if(Session::has('pelanggan')){
            return redirect('/pelanggan/index');
        }

        if(Session::has('admininv')){
            return redirect('/admininv/index');
        }
        // if(Session::has('admin')){
        //     return redirect('/berita');
        // }

        return $next($request);
    }
}
