@extends('layout')

@section('title')
@endsection

@section('content')
    <br>
      <div class="card text-center">
        <div class="card-header"><h2>{{$player->name}}</h2></div>
        <div class="card-body">
          <img width="500px" height="600px" src="/images/players/{{ strtoupper(iconv('UTF-8', 'ASCII//TRANSLIT', $player->name)) }}.png" alt="Foto de {{$player->name}}">
        </div>
        <ul class="list-group list-group-light list-group-small">
            <li class="list-group-item px-4"><p class="card-text"><i class="bi bi-instagram"></i>&nbsp;{{$player->instagram}}</p></li>
            <li class="list-group-item px-4"><p class="card-text"><i class="bi bi-twitter"></i>&nbsp;{{$player->twitter}}</p></li>
            <li class="list-group-item px-4"><p class="card-text"><i class="bi bi-twitch"></i>&nbsp;{{$player->twitch}}</p></li>
        </ul>
        <div class="card-footer text-muted">
          @auth
            @if (Auth::user()->rol==='admin')
                <a type="button" class="btn btn-danger" href="{{route('players/destroy', $player)}}">Eliminar</a>
            @endif
          @endauth
        </div>
      </div>
      <br><br>
@endsection
