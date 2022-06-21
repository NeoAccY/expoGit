<?php

namespace App\Http\Controllers;
use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventarios = Inventario::all();
        return $inventarios;
    }

    public function filter(Request $request){

        $equipos = Inventario::filter()->get();
        return $inventarios;
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
        $inventarios = new Inventario();
        $inventarios->nombre_inventario = $request->nombre_inventario;
        $inventarios->serial = $request->serial;
        $inventarios->cantidad_Inventario = $request->cantidad_Inventario;

        $inventarios->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(inventario $id)
    {
        $inventarios = Inventario::findOrFail($id->id);
        return $inventarios;
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
        $inventarios = Inventario::findOrFail($request->id);
        $inventarios->nombre_inventario = $request->nombre_inventario;
        $inventarios->serial = $request->serial;
        $inventarios->cantidad_Inventario = $request->cantidad_Inventario;

        $inventarios->save();
        return response()->json([
            'message' => 'Se ha actualizado el inventario',
            'equipo' => $inventarios]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventario $id)
    {
        $inventarios = Inventario::destroy($id->id);
        return response()->json([
            'message' => 'Se ha borrado el inventario',
            'equipo' => $inventarios]);
    }
}
