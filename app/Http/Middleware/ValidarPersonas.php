<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidarPersonas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $total = User::count();
        $mas = User::where('birthday', '>', '2016-15-05')->count();

        if($total > 10 && $mas > 10 ){
            return $next($request);
        }

        return response()->json(['mensaje' => 'Acceso Bloqueado'], 403);
    }
}
