@extends('layout')

@section('title','Logeado')

@section('content')

    Nombre de usuario:{{Auth::user()->name}}

    Email: {{Auth::user()->email}}

@endsection
