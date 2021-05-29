<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMaster
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
        if(auth()->user()->roleName() == 'master') {
            return $next($request);
        }
        return abort('403', "You can't access this feature.");
    }
}
