<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::all();
        return $equipos;
    }

    public function filter(Request $request){

        $equipos = Equipo::filter()->get();
        return $equipos;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(equipo $id)
    {
        $equipos = Equipo::findOrFail($id->id);
        return $equipos;
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
        $equipos = new Equipo();
        $equipos->nombre_Equipo = $request->nombre_Equipo;
        $equipos->marca_Equipo = $request->nombre_Equipo;
        $equipos->modelo_Equipo = $request->modelo_Equipo;
        $equipos->inventario_Area = $request->inventario_Area;
        $equipos->area = $request->area;
        $equipos->laboratorio = $request->laboratorio;
        $equipos->fecha_compra = $request->fecha_compra;
        $equipos->calificacion_op = $request->calificacion_op;
        $equipos->calibracion = $request->calibracion;
        $equipos->ultima_calibracion = $request->ultima_calibracion;
        $equipos->calibrado = $request->calibrado;

        $equipos->save();
        return response()->json([
            'message' => 'Almacenado correctamente',
            'equipo' => $equipos]);
            
        $input = $request->all();    
        if($request->hasFile('imagen')){
            $destination_path = 'public/images/equipos';
            $imagen = $request->file('imagen');
            $image_name = $imagen->getClientOriginalName();
            $path = $request->file('imagen')->storeAs($destination_path, $image_name);

            $input['imagen']=$image_name;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function edit(equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\equipo  $equipo
     * @return \Illuminate\Http\JsonResponse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $equipos = Equipo::findOrFail($request->id);
        $equipos->nombre_Equipo = $request->nombre_Equipo;
        $equipos->marca_Equipo = $request->nombre_Equipo;
        $equipos->modelo_Equipo = $request->modelo_Equipo;
        $equipos->inventario_Area = $request->inventario_Area;
        $equipos->area = $request->area;
        $equipos->laboratorio = $request->laboratorio;
        $equipos->fecha_compra = $request->fecha_compra;
        $equipos->calificacion_op = $request->calificacion_op;
        $equipos->calibracion = $request->calibracion;
        $equipos->ultima_calibracion = $request->ultima_calibracion;
        $equipos->calibrado = $request->calibrado;

        $equipos->save();
        return response()->json([
            'message' => 'Actualizado correctamente',
            'equipo' => $equipos]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * 
     * @param  \App\Models\equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(equipo $id)
    {
        $equipos = Equipo::destroy($id->id);
        return response()->json([
            'message' => 'Equipo eliminado'
        ]);
    }
}
