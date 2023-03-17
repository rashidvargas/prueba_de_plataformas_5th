<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::all();

        return view('estudiante.index')->with('estudiantes',$estudiantes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estudiantes = new Estudiante();

        $estudiantes->idcurso = $request -> get('idcurso');
        $estudiantes->name = $request -> get('name');
        $estudiantes->estado = $request -> get('estado');
        $estudiantes->fecha = $request -> get('fecha');


        $estudiantes -> save ();
        
        return redirect('/estudiantes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        return view('estudiante.edit') -> with('estudiante',$estudiante);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::find($id);

        $estudiante->idcurso = $request -> get('idcurso');
        $estudiante->name = $request -> get('name');
        $estudiante->estado = $request -> get('estado');
        $estudiante->fecha = $request -> get('fecha');


        $estudiante -> save ();
        
        return redirect('/estudiantes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();
        return redirect('/estudiantes');
    }
}
