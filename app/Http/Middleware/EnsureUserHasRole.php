<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->Rol !== $role) {
            return redirect()->route('welcome'); // Puedes cambiar a redireccionar si quieres más bonito
        }

        return $next($request);
    }
}
