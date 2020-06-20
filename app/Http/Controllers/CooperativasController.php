<?php

namespace App\Http\Controllers;

use App\cooperativas;
use App\Productores;
use Illuminate\Http\Request;
use DateTime;

class CooperativasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cooperativas = cooperativas::all();
        return response()->json($cooperativas);
    }

    /**
     * Show the form for creating a new resource.
     *
   
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = new DateTime(); 
        $cooperativa=new cooperativas();

        $cooperativa->nombre = $request->nombre;
        $cooperativa->fecha = $date->format('d-m-Y');
        $cooperativa->id_pro_lider=$request->id_pro_lider;

        $cooperativa->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cooperativas  $cooperativas
     * @return \Illuminate\Http\Response
     */
    public function show(cooperativas $cooperativas)
    {
        $cooperativa = cooperativas::findOrFail($cooperativas->id);
        return $cooperativa;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cooperativas  $cooperativas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cooperativas $cooperativas)
    {
        $cooperativa = cooperativas::findOrFail($cooperativas->id);

        $cooperativa->nombre = $request->nombre;
        $cooperativa->fecha = $request->fecha;
        $cooperativa->id_pro_lider=$request->id_pro_lider;

        $cooperativa->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cooperativas  $cooperativas
     * @return \Illuminate\Http\Response
     */
    public function destroy(cooperativas $cooperativas)
    {
        $cooperativa=cooperativas::destroy($cooperativas->id);
        return $cooperativa;
    }
}
