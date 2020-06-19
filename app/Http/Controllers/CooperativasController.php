<?php

namespace App\Http\Controllers;

use App\cooperativas;
use Illuminate\Http\Request;

class CooperativasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        dd("coo");
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
     * @param  \App\cooperativas  $cooperativas
     * @return \Illuminate\Http\Response
     */
    public function show(cooperativas $cooperativas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cooperativas  $cooperativas
     * @return \Illuminate\Http\Response
     */
    public function edit(cooperativas $cooperativas)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cooperativas  $cooperativas
     * @return \Illuminate\Http\Response
     */
    public function destroy(cooperativas $cooperativas)
    {
        //
    }
}
