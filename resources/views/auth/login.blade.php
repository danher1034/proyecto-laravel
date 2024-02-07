@extends('layout')

@section('title')
    <h1 class="h2">Inicia sesión</h1>
    <br>
@endsection

@section('content')
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="name">Nombre de usuario: </label>
            <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control">
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="password" >Contraseña:</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <br><br>
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
