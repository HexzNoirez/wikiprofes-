<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WikiProfes - Encuentra tus profesores</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Bienvenido a WikiProfes</h1>
        <p>El sitio para encontrar información sobre profesores universitarios</p>
    </header>

    <main>
        <section>
            <h2>Encuentra tus profesores</h2>
            <p>Explora nuestra base de datos de profesores para encontrar información detallada sobre sus clases, calificaciones y comentarios de otros estudiantes.</p>
        </section>

        <section>
            <h2>¿Por qué usar WikiProfes?</h2>
            <ul>
                <li>Obtén información detallada sobre los profesores antes de inscribirte en sus clases.</li>
                <li>Lee las opiniones y calificaciones de otros estudiantes.</li>
                <li>Encuentra profesores que se ajusten a tus necesidades y preferencias.</li>
                <li>Contribuye a la comunidad compartiendo tus experiencias con profesores.</li>
            </ul>
        </section>

        <section>
            <h2>Comienza tu búsqueda</h2>
            <form action="/buscar" method="GET">
                <input type="text" name="query" placeholder="Buscar profesor">
                <button type="submit">Buscar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> WikiProfes. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
