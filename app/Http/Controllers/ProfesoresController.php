<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "listado";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profesores.wikiprofes');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $profesores = new Profesor();
        $profesores->profesor = $request->profesor;
        $profesores->nrc = $request->nrc;
        $profesores->materia = $request->materia;
        $profesores->rating = $request->rating;
        $profesores->comentario = $request->comentario;
        $profesores->save();

        return redirect()->route('wikiprofes.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profesor $profesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
    {
        //
    }
}
