@extends('layout')

@section('title')
    <br><br>
    <div class="container text-center my-auto">
        <h1 class="titlle">Configuración de cookies</h1>
    </div>
@endsection

@section('content')
    <br><br>
    <p>Cuando visita cualquier sitio web, el mismo podría obtener o guardar información en su navegador, generalmente mediante el uso de cookies. Esta información puede ser acerca de usted, sus preferencias o su dispositivo, y se usa principalmente para que el sitio funcione según lo esperado. Por lo general, la información no lo identifica directamente, pero puede proporcionarle una experiencia web más personalizada. Ya que respetamos su derecho a la privacidad, usted puede escoger no permitirnos usar ciertas cookies.</p>
       <p>Haga clic en los encabezados de cada categoría para saber más y cambiar nuestras configuraciones predeterminadas. Sin embargo, el bloqueo de algunos tipos de cookies puede afectar su experiencia en el sitio y los servicios que podemos ofrecer.</p>
       <br><br>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Cookies de rendimiento</label>
        </div>
        <br>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Cookies dirigidas</label>
        </div>
        <br>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Cookies de funcionalidad</label>
        </div>
        <br>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Cookies de publicidad</label>
        </div>

@endsection
