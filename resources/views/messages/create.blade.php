@extends('layout')

@section('title')
    <h1 class="h2">Crear mensaje</h1>
    <br>
@endsection

@section('content')
    <form action="{{route('messages/store')}}" method="POST">
        @csrf

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="name">Asunto:</label>
            <input type="text" name="subject" id="subject" value="{{old('subject')}}" class="form-control" />
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="text" class="form-label">Descripcion:</label>
            <textarea name="text" id="text" value="{{old('text')}}" rows="3" class="form-control"></textarea>
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
