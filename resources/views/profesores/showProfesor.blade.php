<x-milayout_wikiprofe>
    <body>
        @section('content')
            <h1 class="text-3x1 font-bold">Listado de profesores</h1>
            <table class="table" border="1">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Profesor</th>
                        <th scope="col">NRC</th>
                        <th scope="col">Materia</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Comentario</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wikiprofes as $wikiprofe)
                        <tr>
                            <td>{{ $wikiprofe->profesor }}</td>
                            <td>{{ $wikiprofe->nrc }}</td>
                            <td>{{ $wikiprofe->materia }}</td>
                            <td>{{ $wikiprofe->rating }}</td>
                            <td>{{ $wikiprofe->comentario }}</td>
                            {{--<td>{{ $profesor->user->name }}</td>--}}
                            <td>
                                <a href="{{ route('wikiprofes.show', $wikiprofe) }}">Ver</a>
                                <a href="{{ route('wikiprofes.edit', $wikiprofe) }}">Editar</a>
                                <form action="{{ route('wikiprofes.destroy', $wikiprofe) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Eliminar">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endsection
    </body>
</x-milayout_wikiprofe>