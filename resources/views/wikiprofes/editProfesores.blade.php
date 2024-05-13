<x-milayout_wikiprofe>
    <x-navbar></x-navbar>
        <body>
            @section('content')
                <h1 class="text-3x1 font-bold">Editar profesor</h1>
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
        @endsection
</x-milayout_wikiprofe>