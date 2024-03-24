<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <form method="POST" action="{{route('wikiprofes.update', $wikiprofe)}}">
    @csrf
    @method('PATCH')

    <label for="profesor">Profesor:</label>
    <input type="text" id="profesor" name="profesor" value="{{ old('profesor') ?? $wikiprofe->profesor }}">
    <br>
    <label for="nrc">NRC:</label>
    <input type="text" id="nrc" name="nrc" value="{{ old('nrc') ?? $wikiprofe->nrc }}">
    <br>
    <label for="materia">Materia:</label>
    <input type="text" id="materia" name="materia" value="{{ old('materia') ?? $wikiprofe->materia }}">
    <br>
    <label for="rating">Rating:</label>
    <input type="number" id="rating" name="rating" value="{{ old('rating') ?? $wikiprofe->rating }}">
    <br>
    <label for="comentario">Comentario:</label>
    <textarea id="comentario" name="comentario">{{ old('comentario') ?? $wikiprofe->comentario }}</textarea>

    <button type="submit">Update</button>
</form>
    
</body>
</html>