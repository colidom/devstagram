<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        // Para proteger la ruta y el controlador
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        return view('dashboard', [
            'user' => $user
        ]);
    }

    // Método que renderiza vista del formulario (GET)
    public function create()
    {
        return view('posts.create');
    }

    // Método que almacena en db
    public function store(Request $request)
    {
        $this->validate($request, [
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);
    }
}
