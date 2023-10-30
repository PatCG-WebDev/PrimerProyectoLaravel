<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function __invoke()
    {
        // Tu lógica aquí
    }
    public function index(){ /* método para administrar la página principal */
        return "Bienvenido a la página de usuarios";
    }

    public function create(){/* método para crear usuarios */
        return "Aquí podrás crear un usuario nuevo";
    }

    public function show($usuario){ /* método para administar un usuario concreto */
        return $usuario;
    }
}
