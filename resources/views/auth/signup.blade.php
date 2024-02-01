@extends('layout')

@section('title','Registro')

@section('content')
    <form action="{{route('signup')}}" method="POST">
        @csrf

        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="username" id="username" value="{{old('username')}}" class="form-control" />
            <label class="form-label" for="username">Nombre de usuario</label>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control" />
            <label class="form-label" for="name">Nombre completo</label>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control" />
            <label class="form-label" for="email">Email address</label>
        </div>

        <label for="birthday">Cumpleaños:</label><br>
        <input type="date" name="birthday" id="birthday"><br>

        <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control" aria-describedby="passwordHelpBlock">
            <label class="form-label" for="password">Contraseña</label>
            <div id="passwordHelpBlock" class="form-text">
            La contraseña debe tener entre 8 y 20 caracteres, contener letras y números, y no debe contener espacios, caracteres especiales ni emoji.
            </div>
        </div>

        <label for="password_confirmation">Repite la contraseña:</label><br>
        <input type="password" name="password_confirmation" id="password_confirmation"><br>

        <input type="submit" value="Enviar">
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
@endsection
