@extends('layouts.plantilla')

@section('title', 'Login')

@section('content')
    <main class="container align-center p-5">
    <form method="POST" action="{{route('inicia-sesion')}}">
        @csrf
        
        <label for="email">Usuario:</label>
        <input type="text" name="email" value="{{ old('email') }}" required autofocus>
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <br>
        <label for="rememberCheck">Mantener sesión iniciada</label>
        <input type="checkbox" name="remember">

        {{-- <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember">Remember Me</label> --}}
        <br>
        <br>
        <button type="submit">Login</button>
        <br>
        <br>
    </form>
@endsection
