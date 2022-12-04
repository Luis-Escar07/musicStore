<x-template titulo="Información de los clientes">
        
        <table class="responsive-table">
            <tr>
                <th>ID</th>
                <th>Id_Usuario</th>
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
                    <td>{{ $cliente->user->id }}</td>
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
</x-template>