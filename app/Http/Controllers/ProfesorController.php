<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;
use Symfony\Component\Mime\MimeTypes;

class ProfesorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesores = Profesor::all();
        $profesores = Profesor::with('user')->get();
        return view('profesores.indexProfesor', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profesores.createProfesor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'profesor_nombre' => ['required', 'string', 'max:100', 'unique:profesors'],
            'calificacion' => ['required', 'numeric', 'min:1', 'max:5'],
            'image' => ['nullable', 'mimes:jpg,jpeg,png']
        ]);

        $filename = null;

        if($request->has('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;
            $path = 'uploads/profesores/';
            $file->move($path, $filename);
        }

        Profesor::create([
            'user_id' => auth()->id(),
            'profesor_nombre' => $request->profesor_nombre,
            'calificacion' => $request->calificacion,
            'image' => $filename,
        ]);

        return redirect()->route('profesores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        
        $wikiprofes = $profesor->wikiprofes()->where('wikiprofes.profesor', $profesor->profesor_nombre)->get();

        return view('profesores.showProfesor', compact('profesor', 'wikiprofes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor)
    {
        return view('profesores.editProfesor', compact('profesor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profesor $profesor)
    {
        $request->validate([
            'profesor_nombre' => ['required', 'string', 'max:100'],
            'calificacion' => ['required', 'numeric', 'min:1', 'max:5']
        ]);

        $profesor->update($request->all());

        return redirect()->route('profesores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
    {
        dd($profesor);
         // Disassociate the user
    $profesor->user()->dissociate();

    // Save the changes
    $profesor->save();

    // Delete the profesor
    $profesor->delete();
        return redirect()->route('profesores.index');
    }
}
