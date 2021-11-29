<?php

namespace App\Http\Controllers;

use App\Models\TipoHabitacion;
use App\Http\Requests\StoreTipoHabitacionRequest;
use App\Http\Requests\UpdateTipoHabitacionRequest;

class TipoHabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTipoHabitacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoHabitacionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoHabitacion  $tipoHabitacion
     * @return \Illuminate\Http\Response
     */
    public function show(TipoHabitacion $tipoHabitacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoHabitacion  $tipoHabitacion
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoHabitacion $tipoHabitacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipoHabitacionRequest  $request
     * @param  \App\Models\TipoHabitacion  $tipoHabitacion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoHabitacionRequest $request, TipoHabitacion $tipoHabitacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoHabitacion  $tipoHabitacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoHabitacion $tipoHabitacion)
    {
        //
    }
}
