<?php

namespace App\Http\Controllers;

use App\Models\TipoHabitacion;
use Illuminate\Http\Request;

/**
 * Class TipoHabitacionController
 * @package App\Http\Controllers
 */
class TipoHabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoHabitacions = TipoHabitacion::paginate();

        return view('tipo-habitacion.index', compact('tipoHabitacions'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoHabitacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoHabitacion = new TipoHabitacion();
        return view('tipo-habitacion.create', compact('tipoHabitacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoHabitacion::$rules);

        $tipoHabitacion = TipoHabitacion::create($request->all());

        return redirect()->route('tipo-habitacions.index')
            ->with('success', 'TipoHabitacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoHabitacion = TipoHabitacion::find($id);

        return view('tipo-habitacion.show', compact('tipoHabitacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoHabitacion = TipoHabitacion::find($id);

        return view('tipo-habitacion.edit', compact('tipoHabitacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoHabitacion $tipoHabitacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoHabitacion $tipoHabitacion)
    {
        request()->validate(TipoHabitacion::$rules);

        $tipoHabitacion->update($request->all());

        return redirect()->route('tipo-habitacions.index')
            ->with('success', 'TipoHabitacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoHabitacion = TipoHabitacion::find($id)->delete();

        return redirect()->route('tipo-habitacions.index')
            ->with('success', 'TipoHabitacion deleted successfully');
    }
}
