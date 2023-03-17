<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Nota::all();

        return view('nota.index')->with('notas',$notas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $notas = new Nota();

        $notas->idnota = $request -> get('idnota');
        $notas->idestudiante = $request -> get('idestudiante');
        $notas->idmateria = $request -> get('idmateria');
        $notas->idcurso = $request -> get('idcurso');
        $notas->idperiodo = $request -> get('idperiodo');
        $notas->nota3 = $request -> get('nota3');
        $notas->nota2 = $request -> get('nota2');
        $notas->nota1 = $request -> get('nota1');
        $notas->fecha = $request -> get('fecha');
        

        $notas -> save ();
        
        return redirect('/notas');
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
        $nota = Nota::find($id);
        return view('nota.edit') -> with('nota',$nota);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $nota = Nota::find($id);

        $nota->idnota = $request->get('idnota');
        $nota->idestudiante = $request -> get('idestudiante');
        $nota->idmateria = $request -> get('idmateria');
        $nota->idcurso = $request -> get('idcurso');
        $nota->idperiodo = $request -> get('idperiodo');
        $nota->nota3 = $request -> get('nota3');
        $nota->nota2 = $request -> get('nota2');
        $nota->nota1 = $request -> get('nota1');
        $nota->fecha = $request -> get('fecha');


        $nota -> save ();
        
        return redirect('/notas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nota = Nota::find($id);
        $nota->delete();
        return redirect('/notas');
    }
}
