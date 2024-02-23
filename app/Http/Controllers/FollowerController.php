<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowerController extends Controller
{
    public function store()
    {
        dd("Following");
    }

    public function destroy()
    {
        dd("Unfollowing");
    }
}
