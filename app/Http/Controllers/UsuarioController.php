<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;

class UsuarioController extends Controller
{

    public function index(){ /* método para administrar la página principal */
        $usuarios = User::orderBy('id','desc')->paginate();
        return view('usuarios.index',compact('usuarios'));
    }

    public function create(){/* método para crear usuarios */
        return view('usuarios.create');
    }

    public function store(StoreUser $request){

        $usuario = User::create([
            'name' => $request->name,
            'slug'=>$request->slug,
            'surName'=>$request->surName, 
            'userName'=>$request->userName,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'phone'=>$request->phone, 
            'seccion'=>$request->seccion,
        ]);

        return redirect()->route('usuarios.show', $usuario);
    }

    public function show(User $usuario){ /* método para administar un usuario concreto */
        return view('usuarios.show', compact('usuario'));
    }

    public function edit(User $usuario){

        return view('usuarios.edit', compact('usuario'));
    }

    public function update(UpdateUser $request, User $usuario){

        $request->validate([
            'name' => 'required|min:3',
            'surName' => 'required',
            'slug' => 'required|unique:users,slug,' . $usuario->id,
            'userName' => 'required',
            'password'=> 'required',
            'email'=> 'required',
            'phone' => 'required',
            'seccion' =>'required',
        ]);

        $usuario->update($request->all()); /* asignación masiva */

        return redirect()->route('usuarios.show', $usuario);

    }

    public function destroy(User $usuario){/* $usuario es un objeto de la clase  */
        $usuario->delete();

        return redirect()->route('usuarios.index', $usuario);
    }

    

}
