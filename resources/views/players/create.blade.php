@extends('layout')

@section('title')
    <h1 class="h2">Crear jugador</h1>
    <br>
@endsection

@section('content')
    <form action="{{route('players/store')}}" method="POST">
        @csrf

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="name">Nombre:</label>
            <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control" />
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="twitter" class="form-label">Twitter:</label>
            <textarea name="twitter" id="twitter" value="{{old('twitter')}}" rows="3" class="form-control"></textarea>
            <br>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="instagram" class="form-label">Instagram:</label>
            <textarea name="instagram" id="instagram" value="{{old('instagram')}}" rows="3" class="form-control"></textarea>
            <br>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="twitch" class="form-label">Twitch:</label>
            <textarea name="twitch" id="twitch" value="{{old('twitch')}}" rows="3" class="form-control"></textarea>
            <br>
        </div>

        @if($errors->any())
            Hay errores en el formulario: <br>
            @foreach ($errors->all() as $error)
                {{$error}} <br>
            @endforeach
        @endif

        <input type="submit" value="enviar">
    </form>
    <br><br>
@endsection
