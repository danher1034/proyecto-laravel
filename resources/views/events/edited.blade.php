@extends('layout')

@section('title')

@endsection

@section('content')
    <h1>Se ha editado con exito</h1>
    <br>
    <br>
    <a href="{{ route('events/show', $event)}}">Volver</a>
@endsection
