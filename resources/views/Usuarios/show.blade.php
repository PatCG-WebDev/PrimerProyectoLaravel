@extends('layouts.plantilla')

@section('title', 'Usuario'. $usuario->name)

@section('content')
    <h1>{{$usuario->name}} {{$usuario->surname}}</h1>
   
    <p><strong>Nombre Usuario: </strong>{{$usuario->userName}}</p>
    <br>
    <p><strong>Contraseña: </strong>{{$usuario->password}}</p>
    <br>
    <p><strong>E-mail: </strong>{{$usuario->email}}</p>
    <br>
    <p><strong>Teléfono: </strong>{{$usuario->phone}}</p>
    <br>
    <p><strong>Sección: </strong>{{$usuario->seccion}}</p>
    <br>


    <a href="{{route('usuarios.index')}}">Volver al listado de Usuarios</a>
    <br>
    <a href="{{route('usuarios.edit',$usuario)}}">Editar usuario</a>
    <br>
    <br>
    <form action="{{route('cursos.destroy', $curso)}}" method="POST"> {{-- lo hacemos desde un formulario porque si lo hacemos desde un enlace a una url lo hará utilizando el método get, y nosotros quremos que utilice el método delete --}}
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>

@endsection