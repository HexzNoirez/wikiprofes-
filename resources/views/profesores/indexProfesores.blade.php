<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de profesores</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Profesor</th>
                <th>NRC</th>
                <th>Materia</th>
                <th>Rating</th>
                <th>Comentario</th>
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
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>