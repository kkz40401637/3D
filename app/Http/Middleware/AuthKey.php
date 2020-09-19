<?php

namespace App\Http\Middleware;

use Closure;

class AuthKey
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
        $token = $request->header('APP_KEY');
        if($token != '6d71c8d34c34408780ff65c589b7c495'){
            return response()->json(['message' => 'App Key Not Foud'], 401 );
        }
        return $next($request);
    }
}
