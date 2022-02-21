<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Estudiante;

class ControladorE extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Estudiante:: all();
        return view('estudiantes.index',compact('datos'),['Titulo'=>'Lista de Estudiantes']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiantes.create',['Titulo'=>'Insertar un Estudiante']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->except(['_token']);
        Estudiante::create($datos);

        $datos = Estudiante:: all();
        return view('estudiantes.index',compact('datos'),['Titulo'=>'Lista de Estudiantes']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Estudiante = Estudiante::find($id);
        return view('estudiantes.show', compact('Estudiante'),['Titulo'=>'Notas del Estudiante y Observaciónes']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Estudiante = Estudiante::find($id);
        return view('estudiantes.edit',['Titulo'=>'Actualizar un Estudiante','Estudiante'=>$Estudiante]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = $request->except(['_token']);
        $estudiante = Estudiante::find($id);

        $estudiante->Nombre = $datos['Nombre'];
        $estudiante->Telefono = $datos['Telefono'];
        $estudiante->Direccion = $datos['Direccion'];
        $estudiante->Nota1 = $datos['Nota1'];
        $estudiante->Nota2 = $datos['Nota2'];
        $estudiante->Nota3 = $datos['Nota3'];
        $estudiante->Observaciones = $datos['Observaciones'];
        $estudiante->save();

        $datos = Estudiante::all();
        return view('estudiantes.index',compact('datos'),['Titulo'=>'Lista de Estudiantes']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Estudiante::destroy($id);
        $datos = Estudiante:: all();
        return view('estudiantes.destroy',compact('datos'),['Titulo'=>'Lista de Estudiantes']);
    }
}
