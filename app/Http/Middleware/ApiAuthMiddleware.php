<?php

namespace InstaResume\Http\Middleware;

use Closure;

class ApiAuthMiddleware
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
        if (!$request->has('token')) {
            abort(403, "Unauthorized");
        }

        $token = $request->get('token');
        $api_key = env('API_KEY', '');

        if (!\Hash::check($token, $api_key)) {
            abort(403, "Unauthorized");
        }

        return $next($request);
    }
}
