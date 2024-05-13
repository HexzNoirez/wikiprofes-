<x-milayout_wikiprofe>
<body>
    @section('content')
    <h1>WikiProfes</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('wikiprofes.store')}}" method="POST">
        @csrf
        <label for="profesor">Profesor:</label>
        <input type="text" id="profesor" name="profesor" value="{{ old('profesor')}}" required><br><br>

        <label for="nrc">NRC:</label>
        <input type="text" id="nrc" name="nrc" value="{{ old('nrc')}}"><br><br>

        <label for="materia">Materia:</label>
        <input type="text" id="materia" name="materia" value="{{ old('materia')}}"><br><br>

        <label for="rating">Rating:</label>
        <input type="number" id="rating" name="rating" min="1" max="5" value="{{ old('rating')}}"><br><br>

        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario" value="{{ old('comentario')}}"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
    @endsection
</body>
</x-milayout_wikiprofe>