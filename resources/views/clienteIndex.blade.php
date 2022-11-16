<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Cliente Index</title>
        @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
    </head>

    <body class="container">

        <h1>Información de los clientes</h1>
        
        <table class="responsive-table">
            <tr>
                <th>ID</th>
                <th>Nombre(s)</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Calle y No. Ext</th>
                <th>No. Int</th>
                <th>Código Postal</th>
                <th>Ciudad</th>
                <th>Estado</th>
                <th>Teléfono</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>
                        <a href="/cliente/{{ $cliente->id }}">
                            {{ $cliente->nombre }}
                        </a>
                    </td>
                    <td>{{ $cliente->apellidos }}</td>
                    <td>{{ $cliente->correo }}</td>
                    <td>{{ $cliente->calle_ext }}</td>
                    <td>{{ $cliente->interior }}</td>
                    <td>{{ $cliente->cod_postal }}</td>
                    <td>{{ $cliente->ciudad }}</td>
                    <td>{{ $cliente->estado }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td> <a href="/cliente/{{ $cliente->id }}/edit">Editar</a> </td>
                    <td> 
                        <form action="/cliente/{{ $cliente->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </body>
</html>