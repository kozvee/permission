<?php

namespace App\Http\Middleware;

use Closure;

class Backend
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

        if ($request->user()->roles->count() <= 0) {
            abort(404);
        }

        return $next($request);
    }
}
