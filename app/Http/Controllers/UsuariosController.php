<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function create(Request $request)
    {
        event(new \App\Events\NovoUsuarioEvent);

        return [
            'user' => rand(1, 100),
        ];
    }
}
