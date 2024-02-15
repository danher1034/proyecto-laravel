@extends('layout')

@section('title')
    <div class="container text-center my-auto">
        <h1>Lista de Eventos</h1>
        <br>
        <br>
        @auth
            @if (Auth::user()->rol === 'admin')
                <a type="button" class="btn btn-secondary" href="{{route('events/create')}}">Crear evento</a>
            @endif
        @endauth
    </div>
    <br>
@endsection

@section('content')

    <div class="mb-4 mt-4 row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
        @forelse ($events as $event)
            <div class="card text-center">
                <div class="card-header"><h2 class="card-title"><a class="link-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="{{route('events/show', $event)}}">{{$event->name}}</a></h2></div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">{{$event->description}}</p>
                    </div>
                    <div class="card-footer text-muted">
                        @auth
                            @if (Auth::user()->rol === 'admin')
                                <a type="button" class="btn btn-warning" href="{{ route('events/edit', $event) }}">Editar</a>
                                &nbsp;&nbsp;&nbsp;
                                <a type="button" class="btn btn-danger" href="{{route('events/destroy', $event)}}">Eliminar</a>
                                &nbsp;&nbsp;&nbsp;
                            @endif
                            @if (Auth::user()->event()->where('event_id', $event->id)->count()>0)
                                <a type="button" class="btn btn-success" href="{{route('events/like', $event)}}"><i class="bi bi-heart"></i></a>
                            @else
                                <a type="button" class="btn btn-danger" href="{{route('events/like', $event)}}"><i class="bi bi-heart"></i></a>
                            @endif
                        @endauth
                    </div>
                </div>
        @empty

        @endforelse
    </div>

@endsection
