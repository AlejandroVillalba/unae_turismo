<?php

namespace App\Http\Controllers;

use App\Models\CategoriaAlojamiento;
use App\Http\Requests\StoreCategoriaAlojamientoRequest;
use App\Http\Requests\UpdateCategoriaAlojamientoRequest;

class CategoriaAlojamientoController extends Controller
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
     * @param  \App\Http\Requests\StoreCategoriaAlojamientoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriaAlojamientoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoriaAlojamiento  $categoriaAlojamiento
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaAlojamiento $categoriaAlojamiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoriaAlojamiento  $categoriaAlojamiento
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriaAlojamiento $categoriaAlojamiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoriaAlojamientoRequest  $request
     * @param  \App\Models\CategoriaAlojamiento  $categoriaAlojamiento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriaAlojamientoRequest $request, CategoriaAlojamiento $categoriaAlojamiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoriaAlojamiento  $categoriaAlojamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriaAlojamiento $categoriaAlojamiento)
    {
        //
    }
}
