<?php

namespace App\Http\Controllers;

use App\Productores;
use App\cooperativas;

use Illuminate\Http\Request;

class ProductoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productor = Productores::all();
        return $productor;
    }

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productor = new Productores();
        $productor->nombre = $request->nombre;
        $productor->apellido = $request->apellido;
        $productor->direccion = $request->direccion;
        $productor->dni = $request->dni;
        $productor->id_cooperativa = $request->id_cooperativa;

        $productor->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productores  $productores
     * @return \Illuminate\Http\Response
     */
    public function show(Productores $productores)
    {
        //
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productores  $productores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productores $productores)
    {
        $productor = Productores::findOrFail($productores->id);

        $productor->nombre = $request->nombre;
        $productor->apellido = $request->apellido;
        $productor->direccion = $request->direccion;
        $productor->dni = $request->dni;
        $productor->id_cooperativa = $request->id_cooperativa;

        $productor->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productores  $productores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productores $productores)
    {
        $productor = Productores::destroy($productores->id);
        return $productor;
    }
}
