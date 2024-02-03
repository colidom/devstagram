<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        //Validaciones
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
    }
}
