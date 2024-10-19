<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorizeUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  $role
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, string $role = ''): Response 
    {
        $user = $request->user();
        
        if ($user && $user->hasRole($role)) {
            return $next($request);
        }

        abort(403, 'Forbidden. Kamu tidak punya akses ke halaman ini');
    }
}
