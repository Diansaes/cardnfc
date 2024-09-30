<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioscontroller extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function registro()
    {
        return view('registro');
    }
}
