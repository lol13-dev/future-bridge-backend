<?php

namespace App\Http\Middleware\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AccessDeniedAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return response('EITS JANGAN MASUK TANPA IJIN YA ADIK ADIK HEHE 😄 ', 403);
        }
        return $next($request);
    }
}