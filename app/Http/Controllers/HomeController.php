<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Definir la constante de paginación
    const ELEMENTS_BY_PAGE = 20;

    // Usamos __invoke si el controller solo va a tener un método
    public function __invoke()

    {
        // Obtener los usuarios que seguimos
        $idsFollowins = auth()->user()->followings->pluck('id')->toArray();
        $posts = Post::whereIn('user_id', $idsFollowins)->paginate(self::ELEMENTS_BY_PAGE);

        return view('home', [
            'posts', $posts
        ]);
    }
}
