@extends('layout')

@section('title')

@endsection

@section('content')
    <h1>Se ha editado con exito</h1>
    <br>
    <br>
    <a type="button" class="btn btn-secondary" href="{{ route('events/show', $event)}}">Volver</a>
@endsection
