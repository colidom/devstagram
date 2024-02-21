<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function __construct()
    {
        // Protegiendo ruta editar-perfil. Redireccionamos a usuarios no autenticados
        $this->middleware('auth');
    }
    public function index()
    {
        dd("Editando perfil");
    }
}
