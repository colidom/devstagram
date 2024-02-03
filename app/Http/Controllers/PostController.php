<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        // Para proteger la ruta y el controlador
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard');
    }
}
