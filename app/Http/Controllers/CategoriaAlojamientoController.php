<?php

namespace App\Http\Controllers;

use App\Models\CategoriaAlojamiento;
use Illuminate\Http\Request;

/**
 * Class CategoriaAlojamientoController
 * @package App\Http\Controllers
 */
class CategoriaAlojamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriaAlojamientos = CategoriaAlojamiento::paginate();

        return view('categoria-alojamiento.index', compact('categoriaAlojamientos'))
            ->with('i', (request()->input('page', 1) - 1) * $categoriaAlojamientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriaAlojamiento = new CategoriaAlojamiento();
        return view('categoria-alojamiento.create', compact('categoriaAlojamiento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CategoriaAlojamiento::$rules);

        $categoriaAlojamiento = CategoriaAlojamiento::create($request->all());

        return redirect()->route('categoria-alojamientos.index')
            ->with('success', 'CategoriaAlojamiento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoriaAlojamiento = CategoriaAlojamiento::find($id);

        return view('categoria-alojamiento.show', compact('categoriaAlojamiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoriaAlojamiento = CategoriaAlojamiento::find($id);

        return view('categoria-alojamiento.edit', compact('categoriaAlojamiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CategoriaAlojamiento $categoriaAlojamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriaAlojamiento $categoriaAlojamiento)
    {
        request()->validate(CategoriaAlojamiento::$rules);

        $categoriaAlojamiento->update($request->all());

        return redirect()->route('categoria-alojamientos.index')
            ->with('success', 'CategoriaAlojamiento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $categoriaAlojamiento = CategoriaAlojamiento::find($id)->delete();

        return redirect()->route('categoria-alojamientos.index')
            ->with('success', 'CategoriaAlojamiento deleted successfully');
    }
}
