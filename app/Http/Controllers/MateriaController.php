<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Evaluacion;
use App\Models\Materia;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.evadocente.materia.lista');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docentes = Docente::all();
        return view('admin.evadocente.materia.nuevo', compact('docentes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materia = new Materia();
        $materia->codigo = $request->codigo;
        $materia->nombre = $request->nombre;
        $materia->docente_id = $request->docente_id;
        $materia->save();

        $materia->id;
        $evaluacion = new Evaluacion();
        $current_date_time = Carbon::now()->toDateTimeString();
        $evaluacion->fecha_inicio = $current_date_time;
        $evaluacion->fecha_fin = $current_date_time;
        $evaluacion->save();
        $materia->evaluacion_id = $evaluacion->id;
        $materia->save();
        return redirect("/materia");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        //
    }
}
