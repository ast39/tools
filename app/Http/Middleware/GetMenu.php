<?php

namespace App\Http\Middleware;

use App\Models\Sphere;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class GetMenu {

    public function handle(Request $request, Closure $next): Response
    {
        $menu = Cache::get('menu', function () {
            return null;
        });

        if (is_null($menu)) {
            $menu = Sphere::with('categories')
                ->get();

            Cache::put('menu', $menu, now()->addMinutes(60));
        }

        return $next($request);
    }
}
