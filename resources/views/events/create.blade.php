@extends('layout')

@section('title')
    <h1 class="h2">Crear evento</h1>
    <br>
@endsection

@section('content')
    <form action="{{route('events/store')}}" method="POST">
        @csrf

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="name">Nombre evento:</label>
            <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control" />
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="description" class="form-label">Descripcion:</label>
            <textarea name="description" id="description" value="{{old('description')}}" rows="3" class="form-control"></textarea>
            <br>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="location" class="form-label">Localización:</label>
            <textarea name="location" id="location" value="{{old('location')}}" rows="3" class="form-control"></textarea>
            <br>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="date" class="form-label">Fecha del evento:</label><br>
            <input type="date" name="date" id="date" class="form-control" min="{{ now()->format('Y-m-d') }}"><br>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="hour" class="form-label">Hora:</label>
            <input type="hour" name="hour" id="hour" class="form-control"><br>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="type" class="form-label">Tipo:</label>
            <select name="type" id="type">
                <option value="official">Partidos oficiales</option>
                <option value="exhibition">Exhibiciones</option>
                <option value="charity">Actos benéficos</option>
            </select>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="tags" class="form-label">Etiquetas:</label>
            <textarea name="tags" id="tags" value="{{old('tags')}}"  rows="3" class="form-control"></textarea>
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
