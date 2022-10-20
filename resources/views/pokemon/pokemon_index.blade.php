<x-template titulo="Pokemon Index">
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Numero en la pokedex</th>
            <th>Tipo primario</th>
            <th>Tipo secundario</th>
            <th>Ver Detalles</th>
            <th>Editar Datos</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($pokemons as $pokemon)
        <tr>
        
            <td>{{ $pokemon->nombre }}</td>
            <td>{{ $pokemon->numero }}</td>
            <td>{{ $pokemon->tipo1 }}</td>
            <td>{{ $pokemon->tipo2 }}</td>
            <td>
                <a href="/pokemon/{{ $pokemon->id }}">
                <input type="submit" value=" 👀 ​">
                </a>
            </td>
            <td>
                <a href="/pokemon/{{ $pokemon->id }}/edit">
                <input type="submit" value=" ✍️​  ">
                </a>
            </td>
            <td>
                <a href="">
                <form action="/pokemon/{{ $pokemon->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value=" 🗑️ ">
                </form>
                </a>
            </td>
        
        </tr>
        @endforeach
    </table>
</x-template>