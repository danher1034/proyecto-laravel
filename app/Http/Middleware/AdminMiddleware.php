<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->rol === 'admin') {
            return $next($request);
        }

        // Redirige a index en caso de que no sea administrador y no tenga el acceso permitido
        return redirect()->route('index');
    }
}







