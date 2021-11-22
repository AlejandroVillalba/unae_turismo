<?php

namespace App\Http\Controllers;

use App\Models\Alojamiento;
use Illuminate\Http\Request;

/**
 * Class AlojamientoController
 * @package App\Http\Controllers
 */
class AlojamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alojamientos = Alojamiento::paginate();

        return view('alojamiento.index', compact('alojamientos'))
            ->with('i', (request()->input('page', 1) - 1) * $alojamientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alojamiento = new Alojamiento();
        return view('alojamiento.create', compact('alojamiento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Alojamiento::$rules);

        $alojamiento = Alojamiento::create($request->all());

        return redirect()->route('alojamientos.index')
            ->with('success', 'Alojamiento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alojamiento = Alojamiento::find($id);

        return view('alojamiento.show', compact('alojamiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alojamiento = Alojamiento::find($id);

        return view('alojamiento.edit', compact('alojamiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Alojamiento $alojamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alojamiento $alojamiento)
    {
        request()->validate(Alojamiento::$rules);

        $alojamiento->update($request->all());

        return redirect()->route('alojamientos.index')
            ->with('success', 'Alojamiento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $alojamiento = Alojamiento::find($id)->delete();

        return redirect()->route('alojamientos.index')
            ->with('success', 'Alojamiento deleted successfully');
    }
}
