<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class AdminAccess {

    public function handle(Request $request, Closure $next): Response
    {
        if (!Gate::allows('admin')) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
