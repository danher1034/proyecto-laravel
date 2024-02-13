@extends('layout')

@section('title')
@endsection

@section('content')
    @auth
        @if (Auth::user()->rol==='admin')
            <br>
            <div class="card text-center">

                <div class="card-header"><h2>{{$message->name}} - {{$message->subject}}</h2></div>
                <div class="card-body">
                    {{$message->text}}
                </div>
                <div class="card-footer text-muted">
                    <a type="button" class="btn btn-danger" href="{{route('messages/destroy', $message)}}">Eliminar</a>
                </div>
            </div>
            <br><br>
        @endif
    @endauth
@endsection
