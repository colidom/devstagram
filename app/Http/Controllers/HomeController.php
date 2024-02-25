<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Usamos __invoke si el controller solo va a tener un método
    public function __invoke()

    {
        // Obtener los usuarios que seguimos
        dd(auth()->user()->followings->pluck('id')->toArray());
        return view('home');
    }
}
