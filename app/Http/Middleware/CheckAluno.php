<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAluno
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Verifique se o usuário está logado
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Verifique se o usuário possui um dos papéis permitidos
        if (!in_array(Auth::user()->usertype, $roles)) { // Altere 'usertype' conforme o campo do seu banco de dados
            return redirect()->route('login');
        }

        return $next($request);
    }
}