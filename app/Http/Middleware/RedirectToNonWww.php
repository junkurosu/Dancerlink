<?php

namespace App\Http\Middleware;

use Closure;

class RedirectToNonWww
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
        if (substr($request->header('host'), 0, 4) == 'www.') {
            $request->headers->set('host', 'dancerlink.site');

            return Redirect::to($request->path());
        return $next($request);
    }
}
