<?php

namespace App\Http\Middleware;

use Closure;

class IPAuthMiddlware
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
    	if (request()->ip() == '87.191.161.215' || request()->ip() == '127.01.0.1' || request()->ip() == '::1') {
		    return $next($request);
	    }

	    if ($request->ajax() || $request->wantsJson()) {
		    return response('Unauthorized.', 401);
	    } else {
		    return redirect()->guest('login');
	    }
    }
}
