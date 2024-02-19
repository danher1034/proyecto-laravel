@extends('layout')

@section('title')

@endsection

@section('content')
    <h1>Se ha enviado con exito</h1>
    <br>
    <br>
    <a type="button" class="btn btn-secondary" href="{{route('players')}}">Volver</a>
@endsection