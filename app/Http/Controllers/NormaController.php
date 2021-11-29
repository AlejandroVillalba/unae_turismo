<?php

namespace App\Http\Controllers;

use App\Models\Norma;
use App\Http\Requests\StoreNormaRequest;
use App\Http\Requests\UpdateNormaRequest;

class NormaController extends Controller
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
     * @param  \App\Http\Requests\StoreNormaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNormaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Norma  $norma
     * @return \Illuminate\Http\Response
     */
    public function show(Norma $norma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Norma  $norma
     * @return \Illuminate\Http\Response
     */
    public function edit(Norma $norma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNormaRequest  $request
     * @param  \App\Models\Norma  $norma
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNormaRequest $request, Norma $norma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Norma  $norma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Norma $norma)
    {
        //
    }
}
