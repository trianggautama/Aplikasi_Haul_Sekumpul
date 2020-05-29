<?php

namespace App\Http\Middleware;

use Closure;

class cekRole
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
        if (auth()->user()->role == 2) {
            return redirect('/admin/index');
        } elseif (auth()->user()->role == 1) {
            return redirect('/posko/index');
        } else {
            return $next($request);

        }

    }
}
