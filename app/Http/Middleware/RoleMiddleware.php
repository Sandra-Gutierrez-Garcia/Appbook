<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $roles
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle(Request $request, Closure $next, $roles)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        $rolesArray = explode(',', $roles);

        /** @var \App\Models\User $user */
        $user = auth()->user();

        if (!$user->hasAnyRole($rolesArray)) {
            abort(403, 'You do not have permission to access this resource.');
        }
        return $next($request);
    }
}

