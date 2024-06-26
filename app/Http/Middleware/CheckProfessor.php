<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckProfessor
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
        // Verifique se o usuário está logado
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Verifique se o usuário é um professor
        if (Auth::user()->usertype !== 'prof') {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
