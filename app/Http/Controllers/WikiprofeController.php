<?php

namespace App\Http\Controllers;

use App\Models\Wikiprofe;
use Illuminate\Http\Request;

class WikiprofeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesores = Wikiprofe::all();
        return view('profesores.indexProfesores', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profesores.createProfes');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'profesor' => ['required', 'string', 'max:100'],
            'nrc' => ['required', 'string', 'max:8'],
            'materia' => ['required', 'string', 'max:100'],
            'rating' => ['required', 'numeric', 'min:1', 'max:5'],
            'comentario' => ['required', 'string', 'min:10','max:255'],
        ]);

        $wikiprofe = new Wikiprofe();
        $wikiprofe->profesor = $request->profesor;
        $wikiprofe->nrc = $request->nrc;
        $wikiprofe->materia = $request->materia;
        $wikiprofe->rating = $request->rating;
        $wikiprofe->comentario = $request->comentario;
        $wikiprofe->save();

        return redirect()->route('wikiprofes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wikiprofe $wikiprofe)
    {
        return view('profesores.showProfe', compact('wikiprofe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wikiprofe $wikiprofe)
    {
        return view('profesores.editProfesores', compact('wikiprofe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wikiprofe $wikiprofe)
    {

        $request->validate([
            'profesor' => ['required', 'string', 'max:100'],
            'nrc' => ['required', 'string', 'max:8'],
            'materia' => ['required', 'string', 'max:100'],
            'rating' => ['required', 'numeric', 'min:1', 'max:5'],
            'comentario' => ['required', 'string', 'min:10','max:255'],
        ]);

        $wikiprofe->profesor = $request->profesor;
        $wikiprofe->nrc = $request->nrc;
        $wikiprofe->materia = $request->materia;
        $wikiprofe->rating = $request->rating;
        $wikiprofe->comentario = $request->comentario;
        $wikiprofe->save();

        return redirect()->route('wikiprofes.show', $wikiprofe);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wikiprofe $wikiprofe)
    {
        $wikiprofe->delete();
        return redirect()->route('wikiprofes.index');
    }
}
