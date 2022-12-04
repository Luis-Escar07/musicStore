<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Sistema</title>
        @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
    </head>

    <body class="container">
        <h1>{{ $titulo }}</h1>
        {{ $slot }}
    </body>
</html>