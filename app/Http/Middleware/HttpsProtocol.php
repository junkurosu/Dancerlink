<?php

namespace App\Http\Middleware;

use Closure;

class HttpsProtocol
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
        if (!$request->secure() && (config('app.env') === 'production' || config('app.env') === 'staging')) {
            if(rtrim($request->url(),'/') == rtrim(url('/'),'/')){
                return redirect()->secure('/');
            }
            return redirect()->secure($request->getRequestUri());
        }
        return $next($request);
    }
}
