<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

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

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()
                ->withErrors(['email' => 'Credenciales incorrectas'])
                ->withInput();
        }

        return redirect()->route('posts.index', [
            'user' => auth()->user()->username
        ]);
    }
}
