@extends('layout')

@section('title')
    <h1>Editar usuario</h1>
@endsection

@section('content')
    <form action="{{route('users/update',$event)}}" method="POST">
        @csrf
        @method('put')

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="birthday">Cumpleaños:</label><br>
            <input type="date" name="birthday" id="birthday" value="{{Auth::user()->bithday}}" class="form-control"><br>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="password"><div class="badge bg-secondary text-wrap" style="width: 6rem;">Opcional</div> Nueva contraseña:</label>
            <input type="password" id="password" name="password" class="form-control" aria-describedby="passwordHelpBlock">
            <div id="passwordHelpBlock" class="form-text">
                La contraseña debe tener minimo 8, preferiblemente deberia contener letras y números, y no contener espacios, caracteres especiales ni emoji.
            </div>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label for="password_confirmation"><div class="badge bg-secondary text-wrap" style="width: 6rem;">Opcional</div> Repite la nueva contraseña:</label><br>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        </div>
        <br><br>

        @if($errors->any())
            Hay errores en el formulario: <br>
            @foreach ($errors->all() as $error)
                {{$error}} <br>
            @endforeach
        @endif

        <input type="submit" value="enviar">
    </form>
@endsection
