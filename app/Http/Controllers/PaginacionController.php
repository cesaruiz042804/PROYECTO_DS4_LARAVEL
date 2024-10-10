<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginacionController extends Controller
{
    public function call_index()
    {
        return view('index');
    }

    public function call_micarrito()
    {
        return view('micarrito');
    }

    public function call_sabores()
    {
        return view('sabores');
    }

    public function call_iniciar_sesion()
    {
        return view('inicioSesion');
    }

    // Hasta aqui las vistas de header

    public function call_vainilla()
    {
        return view('Helados/Vainilla');
    }

    public function call_cereza()
    {
        return view('Helados/Cereza');
    }

    public function call_chocoMint()
    {
        return view('Helados/ChocoMint');
    }

    public function call_chocoWest()
    {
        return view('Helados/ChocoWest');
    }

    public function call_cookie()
    {
        return view('Helados/Cookie');
    }

    public function call_mani()
    {
        return view('Helados/Mani');
    }

    // Hasta aquí las vistas de los sabores de helado

    public function call_crear_cuenta()
    {
        return view('crearCuenta');
    }

    
}

