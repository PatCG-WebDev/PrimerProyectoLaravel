@extends('layouts.plantilla') {{-- incluimos el archivo plantilla que se encuentra dentro de la carpeta Layouts
    El archivo Home.blade.php está dentro de la carpeta view, por eso debemos entrar primero a la carpeta layouts y luego referenciar el archivo. --}}

@section('title', 'Home')

@section('content')
    <h1>Bienvenido a la página principal</h1>
@endsection
