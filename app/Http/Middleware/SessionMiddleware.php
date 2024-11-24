<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SessionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verificar si hay un usuario autenticado
        if (!session()->has('user')) {

            $currentRoute = $request->route()->getName();

            // Definir los mensajes de errores según la ruta
            $errorMessage = 'Debes estar registrado y haber iniciado sesión.';
            if ($currentRoute === 'Productos.micarrito.metodoDePago') {
                $errorMessage = 'Para proceder con el pago debe haber iniciado sesión primero.';
            }

            // Al almacena la ruta actual, entonces cuando se logue, te envía hacia allá
            session(['intended_url' => $request->url()]);

            // Almacena el ID del usuario en una variable de la solicitud
            return redirect()->route('Iniciar-Sesion')->withErrors($errorMessage);
        }

        $request->attributes->set('user', session('user'));
        return $next($request); // Continuar con la solicitud
    }
}
