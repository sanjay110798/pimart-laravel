<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
	public function handle($request, Closure $next, $guard = null)
    {
       if (Auth::guard($guard)->check()) {
            if(!in_array(Auth::user()->role,array('Admin'))){
                abort(403);
            }
        }
        return $next($request);
    }
}