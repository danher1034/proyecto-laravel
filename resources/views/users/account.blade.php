@extends('layout')

@section('title')
    <h1>Cuenta</h1>
    <br>
@endsection

@section('content')

    Nombre de usuario:{{Auth::user()->name}}
    <br><br>
    Email: {{Auth::user()->email}}
    <br><br>
    Año de nacimiento: {{Auth::user()->birthday}}
    <br><br>


@endsection
