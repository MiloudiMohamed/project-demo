<?php

namespace App\Http\Middleware;

use Closure;

class HasAccepted
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
        if (!optional(auth()->user())->is_accepted) {
            auth()->logout(auth()->user());
            return $next($request);
        }

        return $next($request);
    }
}
