@extends('layouts.plantilla') {{-- incluimos el archivo plantilla que se encuentra dentro de la carpeta Layouts
    El archivo Home.blade.php está dentro de la carpeta view, por eso debemos entrar primero a la carpeta layouts y luego referenciar el archivo. --}}

@section('title', 'Iniciar Sesión')

@section('content')
    <h1>Iniciar Sesión</h1>

    <form action="" method="post">

        <label for="">
            Usuario:
            <br>
            <input type="text" name="userName">
        </label>

        <br>

        <label for="">
            Contraseña:
            <input type="text" name="password">
        </label>

    </form>
@endsection
