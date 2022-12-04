<x-template titulo="Ingresa tu información">

        <form action="/cliente" method="POST" class="col s12">
            @csrf

            <label for="nombre">
                <input type="text" name="nombre" placeholder="Nombre(s)" value="{{ old('nombre') }}">

                @error('nombre')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <label for="apellidos">
                <input type="text" name="apellidos" placeholder="Apellidos" value="{{ old('apellidos') }}">

                @error('apellidos')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <label for="correo">
                <input type="text" name="correo" placeholder="Correo electronico" value="{{ old('correo') }}">

                @error('correo')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <label for="calle_ext">
                <input type="text" name="calle_ext" placeholder="Calle y número de casa" value="{{ old('calle_ext') }}">

                @error('calle_ext')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <label for="interior">
                <input type="text" name="interior" placeholder="Apartamento, local, etc." value="{{ old('interior') }}">

                @error('interior')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <label for="cod_postal">
                <input type="text" name="cod_postal" placeholder="Código postal" value="{{ old('cod_postal') }}">

                @error('cod_postal')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <label for="ciudad">
                <input type="text" name="ciudad" placeholder="Ciudad" value="{{ old('ciudad') }}">

                @error('ciudad')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <label for="estado">
                <input type="text" name="estado" placeholder="Estado" value="{{ old('estado') }}">

                @error('estado')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <label for="telefono">
                <input type="text" name="telefono" placeholder="Teléfono" value="{{ old('telefono') }}">

                @error('telefono')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <button class="btn waves-effect waves-light" type="submit" name="action">
                Enviar
            </button>
        </form>
</x-template>