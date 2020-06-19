<?php

namespace App\Http\Controllers;

use App\Productores;
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
        dd("pro");
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
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productores  $productores
     * @return \Illuminate\Http\Response
     */
    public function edit(Productores $productores)
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productores  $productores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productores $productores)
    {
        //
    }
}
