<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/contacto.css">
        <title>Clientes Form</title>
    </head>
    <body>
        <h1>Ingresa tu información</h1>

        <form action="/cliente" method="POST">
            @csrf

            <label for="nombre">
                Nombre:
                <br>
                <input type="text" name="nombre" placeholder="Nombre(s)">

                @error('nombre')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <br>

            <label for="apellidos">
                Apellidos:
                <br>
                <input type="text" name="apellidos" placeholder="Apellidos">

                @error('apellidos')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <br>

            <label for="correo">
                Correo:
                <br>
                <input type="text" name="correo" placeholder="Correo electronico">

                @error('correo')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <br>

            <label for="calle_ext">
                Dirección 1:
                <br>
                <input type="text" name="calle_ext" placeholder="Calle y número de casa">

                @error('calle_ext')
                    <i>{{ $message }}</i>
                @enderror
            </label>
            
            <br>

            <label for="interior">
                Dirección 2:
                <br>
                <input type="text" name="interior" placeholder="Apartamento, local, etc.">

                @error('interior')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <br>

            <label for="cod_postal">
                Código postal:
                <br>
                <input type="text" name="cod_postal" placeholder="Código postal">

                @error('cod_postal')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <br>

            <label for="ciudad">
                Ciudad:
                <br>
                <input type="text" name="ciudad" placeholder="Ciudad">

                @error('ciudad')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <br>

            <label for="estado">
                Estado:
                <br>
                <input type="text" name="estado" placeholder="Estado">

                @error('estado')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <br>

            <label for="telefono">
                Teléfono:
                <br>
                <input type="text" name="telefono" placeholder="Teléfono">

                @error('telefono')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <br>

            <label for="Enviar">
                <br>
                <input type="submit" value="Enviar">
            </label>
        </form>
    </body>
</html>