<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info de profesores</title>
</head>
<body>
    <h1>Profesor ID {{ $wikiprofe->id }}</h1>
    <ul>
        <li>Profesor: {{ $wikiprofe->profesor }}</li>
        <li>NRC: {{ $wikiprofe->nrc }}</li>
        <li>Materia: {{ $wikiprofe->materia }}</li>
        <li>Rating: {{ $wikiprofe->rating }}</li>
        <li>Comentario: {{ $wikiprofe->comentario }}</li>
    </ul>
</body>
</html>