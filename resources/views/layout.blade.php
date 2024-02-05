<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="resources/css/app.css">
    <script src="../resources/js/app.js" defer></script>
    <title></title>
</head>
<body>
    @include('partials.nav')

    <div class="container mt-3">
        @yield('title','mi título')
    </div>

    <div class="container">
        @yield('content', 'mi contenido')
    </div>
    @include('partials.footer')
</body>
</html>
