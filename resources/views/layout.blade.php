<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title></title>
</head>
<body>
    @include('partials.nav')

    <div>
        @yield('title','mi título')
    </div>

    @yield('content', 'mi contenido')


    @include('partials.footer')
</body>
</html>
