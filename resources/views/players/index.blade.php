@extends('layout')

@section('title')
    <div class="container text-center my-auto">
        <h1>Lista de jugadores</h1>
        <br>
        <br>
        @auth
            @if (Auth::user()->rol === 'admin')
                <a type="button" class="btn btn-secondary" href="{{route('players/create')}}">Crear jugadores</a>
            @endif
        @endauth
    </div>
    <br>
@endsection

@section('content')
    <div class="mb-4 mt-4 row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
        @forelse ($players as $player)
            @if ($player->visible == '1')
                <div class="card text-center">
                    <div class="card-header"><h2 class="card-title"><a class="link-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="{{route('players/show', $player)}}">{{$player->name}}</a></h2></div>
                        <div class="card-body">
                            <img width="250px" height="300px" src="/images/players/{{ strtoupper(iconv('UTF-8', 'ASCII//TRANSLIT', $player->name)) }}.png" alt="Foto de {{ $player->name }}">
                        </div>
                        <div class="card-footer text-muted">
                            @auth
                                @if (Auth::user()->rol=='admin')
                                    <a type="button" class="btn btn-success" href="{{route('players/visibility', $player)}}"><i class="bi bi-eye-fill"></i></a>
                                    <a type="button" class="btn btn-danger" href="{{route('players/destroy', $player)}}">Eliminar</a>
                                @endif
                            @endauth
                        </div>
                </div>
            @elseif ($player->visible == '0' && Auth::check() && Auth::user()->rol=='admin')
                <div class="card text-center">
                    <div class="card-header"><h2 class="card-title"><a class="link-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="{{route('players/show', $player)}}">{{$player->name}}</a></h2></div>
                        <div class="card-body">
                            <img width="250px" height="300px" src="/images/players/{{ strtoupper(iconv('UTF-8', 'ASCII//TRANSLIT', $player->name)) }}.png" alt="Foto de {{ $player->name }}">
                        </div>
                        <div class="card-footer text-muted">
                            @auth
                                <a type="button" class="btn btn-danger" href="{{route('players/visibility', $player)}}"><i class="bi bi-eye-slash-fill"></i></a>
                                <a type="button" class="btn btn-danger" href="{{route('players/destroy', $player)}}">Eliminar</a>
                            @endauth
                    </div>
                </div>
            @endif
        @empty
        @endforelse

    </div>

    {{$players->links()}}
    <br><br>
@endsection
