<?php

namespace App\Http\Controllers;
use App\Models\Laboratorio;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratorios = Laboratorio::all();
        return $laboratorios;
    }

    public function filter(Request $request){

        $equipos = Laboratorio::filter()->get();
        return $laboratorios;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $laboratorios = new Laboratorio();
        $laboratorios->id = $request->id;
        $laboratorios->nombre_Laboratorio = $request->nombre_Laboratorio;
        $laboratorios->area = $request->area;
        $laboratorios->departamento = $request->departamento;

        $laboratorios->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $laboratorios = Laboratorio::findOrFail($id);
        return $laboratorios;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $laboratorios = Laboratorio::findOrFail($request->id);
        $laboratorios->id = $request->id;
        $laboratorios->nombre_Laboratorio = $request->nombre_Laboratorio;
        $laboratorios->area = $request->area;
        $laboratorios->departamento = $request->departamento;

        $laboratorios->save();
        return response()->json([
            'message' => 'Se ha actualizado el laboratorio',
            'equipo' => $laboratorios]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(laboratorio $id)
    {
        $laboratorios = Laboratorio::destroy($id->id);
        return response()->json([
            'message' => 'Se ha borrado el laboratorio',
            'equipo' => $laboratorios]);
    }
}
