@extends('layout')

@section('title')
    <h1>Editar evento</h1>
@endsection

@section('content')
    <form action="{{route('events/update',$event)}}" method="POST">
        @csrf
        @method('put')

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="name">Nombre evento:</label>
            <input type="text" name="name" id="name" value="{{$event->name}}" class="form-control">
            <br>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="description">Descripción:</label>
            <input type="text" name="description" id="description" value="{{$event->description}}" class="form-control">
            <br>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="location">Localización:</label>
            <input type="text" name="location" id="location" value="{{$event->location}}" class="form-control">
            <br>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="date" class="form-label" min="{{ now()->format('Y-m-d') }}">Fecha del evento:</label><br>
            <input type="date" name="date" id="date" value="{{$event->date}}" class="form-control"><br>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="hour" class="form-label">Hora:</label>
            <input type="hour" name="hour" id="hour" value="{{$event->hour}}" class="form-control"><br>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="type" class="form-label" aria-describedby="passwordHelpBlock">Tipo:</label>
            <select name="type" id="type">
                <option value="official">Partidos oficiales</option>
                <option value="exhibition">Exhibiciones</option>
                <option value="charity">Actos benéficos</option>
            </select>
            <div id="passwordHelpBlock" class="form-text">
               ¡Cuidado tiene que volver a poner el tipo!
            </div>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="tags" class="form-label">Etiquetas:</label>
            <input type="text" name="tags" id="tags" value="{{$event->tags}}" class="form-control">
            <br>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="visible">Visible:</label>
            <input type="checkbox" name="visible" id="visible" value="{{$event->visible==1 ? 'checked' : ''}}">
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
@endsection
