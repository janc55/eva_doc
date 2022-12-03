<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.evadocente.docente.lista');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.evadocente.docente.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->nombre." ".$request->apellido_paterno." ".$request->apellido_materno;
        $request->validate([
            "imagen" => "required"
        ]);

        $nom_imagen = "";
        if($file = $request->file("imagen")){
            // nombre original del archivo
            $base_name = Str::random();
            //$nom_imagen = $file->getClientOriginalName();
            $nom_imagen = $base_name . '.' . $file->getClientOriginalExtension();
            $file->move("fotos/", $nom_imagen);
            $nom_imagen = "fotos/" . $nom_imagen;            
        }
        $docente = new Docente();
        $docente->username = $name;
        $docente->nombre = $request->nombre;
        $docente->apellido_paterno = $request->apellido_paterno;
        $docente->apellido_materno = $request->apellido_materno;
        $docente->cedula_identidad = $request->cedula_identidad;
        $docente->imagen = $nom_imagen;
        $docente->celular = $request->celular;
        $docente->email = $request->email;
        $docente->genero = $request->genero;
        $docente->fecha_nacimiento = $request->fecha_nacimiento;
       
        $docente->save();
        return redirect("/docente")->with("status", "Docente creado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docente $docente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docente $docente)
    {
        //
    }
}
