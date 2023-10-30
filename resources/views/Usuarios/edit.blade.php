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
            <input type="text" name="name" value="{{old('name')}}"> {{-- el método old va a recuperar lo que habíamos escrito en este campo cuando no se hayan completado todos los campor requeridos --}}
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
            <input type="text" name="surname" value="{{old('surname')}}"> {{-- el método old va a recuperar lo que habíamos escrito en este campo cuando no se hayan completado todos los campor requeridos --}}
        </label>

        @error('surname') {{-- en esto nos salta un mensaje cuando dejamos vacío un campo requerido --}}
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>

        <label>
            Nombre Usuario:
            <br>
            <input type="text" name="userName" value="{{old('userName')}}"> {{-- el método old va a recuperar lo que habíamos escrito en este campo cuando no se hayan completado todos los campor requeridos --}}
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
            <input type="password" name="password" value="{{old('password')}}"> {{-- el método old va a recuperar lo que habíamos escrito en este campo cuando no se hayan completado todos los campor requeridos --}}
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
            <input type="email" name="email" value="{{old('email')}}"">
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
            <input type="tel" name="phone" value="{{old('phone')}}">
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
            <input type="text" name="seccion" value="{{old('seccion')}}">
        </label>

        @error('seccion') {{-- en esto nos salta un mensaje cuando dejamos vacío un campo requerido --}}
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>

        
        <button type="submit">Actualizar Usuario</button>
    </form>
@endsection