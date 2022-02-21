<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CursosM;

class Cursos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = CursosM:: all();
        return view('Cursos.Index',compact('datos'),['Titulo'=>'Lista de Cursos']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cursos.create',['Titulo'=>'Insertar un Curso']);
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
        CursosM::create($datos);

        $datos = CursosM:: all();
        return view('Cursos.index',compact('datos'),['Titulo'=>'Lista de cursos']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Curso = CursosM::find($id);
        return view('Cursos.edit',['Titulo'=>'Actualizar Curso','Curso'=>$Curso]);
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
        $curso = CursosM::find($id);

        $curso->Nombre = $datos['Nombre'];
        $curso->Codigo = $datos['Codigo'];
        $curso->Precio = $datos['Precio'];
        $curso->id_E = $datos['id_E'];
        $curso->save();
        $datos = CursosM::all();
        return view('cursos.index',compact('datos'),['Titulo'=>'Lista de cursos']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CursosM::destroy($id);
        $datos = CursosM:: all();
        return view('Cursos.destroy',compact('datos'),['Titulo'=>'Lista de Cursos']);
    }
}
