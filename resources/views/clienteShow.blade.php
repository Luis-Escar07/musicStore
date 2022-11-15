<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Cliente Show</title>
    </head>

    <body>
        <h1>Información de un cliente en especifico</h1>

        <h2> {{ $cliente->nombre }} </h2>
        <h2> {{ $cliente->correo }} </h2>
        <h2> {{ $cliente->calle_ext }} </h2>
        <h2> {{ $cliente->interior }} </h2>
        <h2> {{ $cliente->cod_postal }} </h2>
        <h2> {{ $cliente->ciudad }} </h2>
        <h2> {{ $cliente->estado }} </h2>
        <h2> {{ $cliente->telefono }} </h2>

    </body>
</html>