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

    public function call_soporte(){
        return view('soporte');
    }

    // Hasta aqui las vistas de header

    public function call_vainilla()
    {
        return view('helados.Vainilla');
    }

    public function call_cereza()
    {
        return view('helados.Cereza');
    }

    public function call_chocoMint()
    {
        return view('helados.ChocoMint');
    }

    public function call_chocoWest()
    {
        return view('helados.ChocoWest');
    }

    public function call_cookie()
    {
        return view('helados.Cookie');
    }

    public function call_mani()
    {
        return view('helados.Mani');
    }

    // Hasta aquí las vistas de los sabores de helado

    public function call_crear_cuenta()
    {
        return view('crearCuenta');
    }

    // Para el evento de carga

    public function call_loading()
    {
        return view('load');
    }

    public function call_error()
    {
        return view('error');
    }
    
}

