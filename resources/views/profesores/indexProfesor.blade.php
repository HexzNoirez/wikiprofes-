<x-milayout_wikiprofe>
    <body>
        @section('content')
        <h1 class="text-3x1 font-bold">Listado de profesores</h1>
            <table class="table" border="1">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">Profesor</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profesores as $profesor)
                        <tr>
                            <td><img src="{{$profesor->image}}" class="avatar avatar-xl rounded-circle"></td>
                            <td>{{ $profesor->profesor_nombre }}</td>
                            <td>{{ $profesor->calificacion }}</td>
                            <td>
                                <a href="{{ route('profesores.show', $profesor) }}">Ver</a>
                                <a href="{{ route('profesores.edit', $profesor) }}">Editar</a>
                                <form action="{{ route('profesores.destroy', $profesor->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
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