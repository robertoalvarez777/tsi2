<?php

namespace App\Http\Controllers;

use App\Models\Tipocomp;
use Illuminate\Http\Request;

class TiposCompController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposcomp = Tipocomp::all();
        return $tiposcomp;
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
     * @param  \App\Models\Tipocomp  $tipocomp
     * @return \Illuminate\Http\Response
     */
    public function show(Tipocomp $tipocomp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipocomp  $tipocomp
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipocomp $tipocomp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipocomp  $tipocomp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipocomp $tipocomp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipocomp  $tipocomp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipocomp $tipocomp)
    {
        //
    }
}
