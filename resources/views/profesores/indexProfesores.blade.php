<x-milayout_wikiprofe>

<body>
    <div class="center">
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
                    @foreach ($profesores as $profesor)
                        <tr>
                            <td>{{ $profesor->profesor }}</td>
                            <td>{{ $profesor->nrc }}</td>
                            <td>{{ $profesor->materia }}</td>
                            <td>{{ $profesor->rating }}</td>
                            <td>{{ $profesor->comentario }}</td>
                            <td>
                                <a href="{{ route('wikiprofes.show', $profesor) }}">Ver</a>
                                <a href="{{ route('wikiprofes.edit', $profesor) }}">Editar</a>
                                <form action="{{ route('wikiprofes.destroy', $profesor) }}" method="POST">
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
    </div>
</body>
</x-milayout_wikiprofe>