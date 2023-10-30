@extends('layouts.plantilla')

@section('title', 'Usuarios')

@section('content')
    <h1>Bienvenido a la página principal de Usuarios</h1>
    <a href="{{route('usuarios.create')}}">Crear usuario</a>
    <ul>
        @foreach ($usuarios as $usuario)
            <li>
                <a href="{{route('usuarios.show', $usuario)}}">{{$usuario->name}}"</a>
            </li>
        @endforeach
    </ul>

    {{$usuarios->links()}} {{-- Paginamos. Mostram
@endos el menú para movernos por las diferentes páginas de los registos. --}}section