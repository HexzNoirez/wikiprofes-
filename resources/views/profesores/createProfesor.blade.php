<x-milayout_wikiprofe>
    <x-navbar>
    <body>
        @section('content')
        <h1>Wikiprofes</h1>
        
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <form action="{{route('profesores.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="profesor_nombre">Profesor:</label>
                <input type="text" id="profesor_nombre" name="profesor_nombre" value="{{ old('profesor_nombre')}}" required><br><br>

                <label for="calificacion">Rating:</label>
                <input type="number" id="calificacion" name="calificacion" min="1" max="5" value="{{ old('calificacion')}}"><br><br>

                <label for="">Upload Image</label>
                <input type="file"name="image" class="form-control"/>

                <input type="submit" value="Submit">
            </form>
        @endsection
    </body>
</x-navbar>
</x-milayout_wikiprofe>