@extends('layout')

@section('title')
    <h1 class="h2">Inicia sesión</h1>
    <br>
@endsection

@section('content')
    <form action="{{route('signup')}}" method="POST">
        @csrf

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="username">Nombre de usuario: </label>
            <input type="text" name="username" id="username" value="{{old('username')}}" class="form-control">
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="password" >Contraseña:</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
@endsection