<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // el constructor se ejecuta cuando es instanciado este controlador o esta clase
    public function __construct()
    {
        // middlewar para proteger a todas las rutas de este controlador (acceso solo a usuarios autenticados)
        $this->middleware('auth');
    }

    public function index()
    {
        /* dd(auth()->user()); */
        return view('dashboard');
    }
}
