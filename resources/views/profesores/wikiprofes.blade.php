<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WikiProfes</h1>
    <form action="{{ route('wikiprofes.store') }}" method="POST">
        @csrf
        <label for="profesor">Profesor:</label>
        <input type="text" id="profesor" name="profesor"><br><br>

        <label for="nrc">NRC:</label>
        <input type="text" id="nrc" name="nrc"><br><br>

        <label for="materia">Materia:</label>
        <input type="text" id="materia" name="materia"><br><br>

        <label for="rating">Rating:</label>
        <input type="number" id="rating" name="rating" min="1" max="5"><br><br>

        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
    
</body>
</html>