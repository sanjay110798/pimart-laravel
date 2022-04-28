<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class User
{
	public function handle($request, Closure $next, $guard = null)
    {
       if (Auth::guard($guard)->check()) {
            if(!in_array(Auth::user()->role,array('User'))){
                abort(403);
            }
        }
        return $next($request);
    }
}