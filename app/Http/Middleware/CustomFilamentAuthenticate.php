<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Filament\Facades\Filament;
use Symfony\Component\HttpFoundation\Response;

class CustomFilamentAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $guard = Filament::auth();

        if (! $guard->check()) {
            abort(403, 'Unauthorized');
        }

        $user = $guard->user();

        $panel = Filament::getCurrentPanel();

        abort_if(! $user->canAccessPanel($panel), 403);

        return $next($request);
    }
}
