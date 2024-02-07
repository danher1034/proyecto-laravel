@extends('layout')

@section('title')
    <h1>Nueva película</h1>
@endsection

@section('content')
    <form action="{{route('events.store')}}" method="POST">
        @csrf

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="name">Nombre evento:</label>
            <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control" />
        </div>

        <label for="description">Descripcion:</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <br>

        <label for="location">Localización:</label>
            <textarea name="location" id="location" cols="30" rows="10"></textarea>
        <br>

        <label for="tags">Etiquetas:</label>
            <textarea name="tags" id="tags" cols="30" rows="10"></textarea>
        <br>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="date">Fecha del evento:</label><br>
            <input type="date" name="date" id="date"><br>
        </div>

        <label for="hour">Hora:</label>
        <select name="hour" id="hour">
            <option value="selecciona">Selecciona una hora</option>
            @for ($i=24; $i<date('H'); $i++)
                <option value="{{$i}}">{{$i}}</option>
            @endfor
        </select>
        <br>

        <label for="type">Tipo:</label>
        <select name="type" id="type">
            <option value="oficial">Partidos oficiales</option>
            <option value="exhibition">Exhibiciones</option>
            <option value="charity">Actos benéficos</option>
        </select>
        <br>

        @if($errors->any())
            Hay errores en el formulario: <br>
            @foreach ($errors->all() as $error)
                {{$error}} <br>
            @endforeach
        @endif

        <input type="submit" value="enviar">
    </form>
@endsection
