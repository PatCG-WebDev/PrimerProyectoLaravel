<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        return view('home');

    }
    
    /* El método invoke se utiliza para administrar una sola ruta, para administar varias rutas creamos varias funciones/métodos con un nombre concreto cada una*/
}
