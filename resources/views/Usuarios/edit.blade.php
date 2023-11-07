@extends('layouts.plantilla')

@section('title', 'Usuarios edit')

@section('content')
    <h1>En esta página podrás editar un usuario</h1>

    
    <form action="{{route('usuarios.update', $usuario)}}" method="post">

        @csrf {{-- token de seguridad para evitar modificar el formulario de forma externa --}}
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $usuario->name)}}"> {{-- el método old va a recuperar lo que habíamos escrito en este campo cuando no se hayan completado todos los campor requeridos --}}
        </label>

        @error('name') {{-- en esto nos salta un mensaje cuando dejamos vacío un campo requerido --}}
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>

        <label>
            Apellidos:
            <br>
            <input type="text" name="surName" value="{{old('surName', $usuario->surName)}}"> {{-- el método old va a recuperar lo que habíamos escrito en este campo cuando no se hayan completado todos los campor requeridos --}}
        </label>

        @error('surName') {{-- en esto nos salta un mensaje cuando dejamos vacío un campo requerido --}}
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>

        <label>
            Slug:
            <br>
            <input type="text" name="slug" value="{{old('slug', $usuario->slug)}}"> {{-- el método old va a recuperar lo que habíamos escrito en este campo cuando no se hayan completado todos los campor requeridos --}}
        </label>

        @error('slug') {{-- en esto nos salta un mensaje cuando dejamos vacío un campo requerido --}}
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>

        <label>
            Nombre Usuario:
            <br>
            <input type="text" name="userName" value="{{old('userName', $usuario->userName)}}"> {{-- el método old va a recuperar lo que habíamos escrito en este campo cuando no se hayan completado todos los campor requeridos --}}
        </label>

        @error('userName') {{-- en esto nos salta un mensaje cuando dejamos vacío un campo requerido --}}
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>

        <label>
            Contraseña:
            <br>
            <input type="password" name="password" value="{{old('password', $usuario->password)}}"> {{-- el método old va a recuperar lo que habíamos escrito en este campo cuando no se hayan completado todos los campor requeridos --}}
        </label>

        @error('password') {{-- en esto nos salta un mensaje cuando dejamos vacío un campo requerido --}}
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>

        <label>
            E-mail
            <br>
            <input type="email" name="email" value="{{old('email', $usuario->email)}}"">
        </label>

        @error('email') {{-- en esto nos salta un mensaje cuando dejamos vacío un campo requerido --}}
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>


        <label>
            Teléfono
            <br>
            <input type="tel" name="phone" value="{{old('phone', $usuario->phone)}}">
        </label>

        @error('phone') {{-- en esto nos salta un mensaje cuando dejamos vacío un campo requerido --}}
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>

        <label>
            Sección
            <br>
            <input type="text" name="seccion" value="{{old('seccion', $usuario->seccion)}}">
        </label>

        @error('seccion') {{-- en esto nos salta un mensaje cuando dejamos vacío un campo requerido --}}
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>
        <br>
        <button type="submit">Actualizar Usuario</button>
        <br>
        <br>
    </form>
@endsection