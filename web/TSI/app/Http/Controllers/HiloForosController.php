<?php

namespace App\Http\Controllers;

use App\Models\Hiloforo;
use Illuminate\Http\Request;

class HiloForosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hilo = Hiloforo::all();
        return $hilo;
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
     * @param  \App\Models\Hiloforo  $hiloforo
     * @return \Illuminate\Http\Response
     */
    public function show(Hiloforo $hiloforo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hiloforo  $hiloforo
     * @return \Illuminate\Http\Response
     */
    public function edit(Hiloforo $hiloforo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hiloforo  $hiloforo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hiloforo $hiloforo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hiloforo  $hiloforo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hiloforo $hiloforo)
    {
        //
    }
}
