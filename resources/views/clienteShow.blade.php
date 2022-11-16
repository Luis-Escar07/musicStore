<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Cliente Show</title>
        @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
    </head>

    <body class="container">

        <ul class="collection with-header">
            <li class="collection-header"><h4>Información de un cliente en especifico</h4></li>

            <li class="collection-item">
                <span class="blue-text text-darken-2">Nombre:</span> 
                {{ $cliente->nombre }}
            </li>

            <li class="collection-item">
                <span class="blue-text text-darken-2">Apellidos:</span> 
                {{ $cliente->apellidos }}
            </li>

            <li class="collection-item">
                <span class="blue-text text-darken-2">Correo:</span> 
                {{ $cliente->correo }}
            </li>

            <li class="collection-item">
                <span class="blue-text text-darken-2">Calle y No. exterior:</span>
                {{ $cliente->calle_ext }}
            </li>

            <li class="collection-item">
                <span class="blue-text text-darken-2">No. interior:</span>
                {{ $cliente->interior }}
            </li>

            <li class="collection-item">
                <span class="blue-text text-darken-2">Código postal:</span>
                {{ $cliente->cod_postal }}
            </li>

            <li class="collection-item">
                <span class="blue-text text-darken-2">Ciudad:</span>
                {{ $cliente->ciudad }}
            </li>

            <li class="collection-item">
                <span class="blue-text text-darken-2">Estado:</span>
                {{ $cliente->estado }}
            </li>

            <li class="collection-item">
                <span class="blue-text text-darken-2">Teléfono:</span>
                {{ $cliente->telefono }}</li>
        </ul>

    </body>
</html>