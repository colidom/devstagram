<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Usamos __invoke si el controller solo va a tener un método
    public function __invoke()

    {
        return view('home');
    }
}
