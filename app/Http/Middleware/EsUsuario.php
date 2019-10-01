<?php

namespace App\Http\Middleware;

use Closure;

class EsUsuario
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
        // if (Auth::check()){
        //     $user=Auth::user();
        //     if(!$user->esAdmin()){
        //         return redirect('inicio');
        //     }
        // }
        return $next($request);
    }
}
