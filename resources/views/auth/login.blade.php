@extends('layouts.plantilla')

@section('title', 'Login')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
            
        <label for="userName">Usuario:</label>
        <input type="text" name="useName" value="{{ old('userName') }}" required autofocus>
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>

        {{-- <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember">Remember Me</label> --}}
        <br>
        <br>
        <button type="submit">Login</button>
        <br>
        <br>
    </form>
@endsection
