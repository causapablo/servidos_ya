<h1>Mostrar la lista de productos</h1>
<br>
<table style="border-style: solid">
    <thead>
        <tr>
            <th>ID</th>
            <th>Comentario</th>

        </tr>
    </thead>
    <tbody>
        @foreach($comentarios as $comentario)
        <tr>
            <td>{{ $comentario->id }}</td>
            <td>{{ $comentario->comentario }}</td>

            <td>
                <a href="{{ route('comentario.edit',$comentario->id) }}">Editar</a>
                 |
                <form action="{{ route('comentario.destroy',$comentario->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('¿Quieres borrar?')">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

