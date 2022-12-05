<x-template titulo="Información del cliente">
        <ul class="collection with-header">

            <li class="collection-item">
                <span class="blue-text text-darken-2">Id_Usuario:</span> 
                {{ $cliente->user->id }}
            </li>

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
</x-template>