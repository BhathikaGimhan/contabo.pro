<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IfRegisteredMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if (
            is_null(Auth::user()->title) ||
            is_null(Auth::user()->first_name) ||
            is_null(Auth::user()->last_name) ||
            is_null(Auth::user()->phone) ||
            is_null(Auth::user()->user_type) ||
            is_null(Auth::user()->address1) ||
            is_null(Auth::user()->city) ||
            is_null(Auth::user()->country) ||
            is_null(Auth::user()->postal_code)
        ) {
            return redirect()->route('register-step2.create');
        }

        return $next($request);
    }
}
