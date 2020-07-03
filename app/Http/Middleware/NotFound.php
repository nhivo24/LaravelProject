<?php

namespace App\Http\Middleware;

use Closure;

class NotFound
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   public function handle($request, Closure $next) {
    if (!Auth::check()) {
        abort(404, 'Access denied');
    }
    return $next($request);
    }
}
