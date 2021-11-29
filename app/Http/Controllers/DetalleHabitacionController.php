<?php

namespace App\Http\Controllers;

use App\Models\DetalleHabitacion;
use Illuminate\Http\Request;

/**
 * Class DetalleHabitacionController
 * @package App\Http\Controllers
 */
class DetalleHabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleHabitacions = DetalleHabitacion::paginate();

        return view('detalle-habitacion.index', compact('detalleHabitacions'))
            ->with('i', (request()->input('page', 1) - 1) * $detalleHabitacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalleHabitacion = new DetalleHabitacion();
        return view('detalle-habitacion.create', compact('detalleHabitacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DetalleHabitacion::$rules);

        $detalleHabitacion = DetalleHabitacion::create($request->all());

        return redirect()->route('detalle-habitacions.index')
            ->with('success', 'DetalleHabitacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleHabitacion = DetalleHabitacion::find($id);

        return view('detalle-habitacion.show', compact('detalleHabitacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleHabitacion = DetalleHabitacion::find($id);

        return view('detalle-habitacion.edit', compact('detalleHabitacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetalleHabitacion $detalleHabitacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleHabitacion $detalleHabitacion)
    {
        request()->validate(DetalleHabitacion::$rules);

        $detalleHabitacion->update($request->all());

        return redirect()->route('detalle-habitacions.index')
            ->with('success', 'DetalleHabitacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detalleHabitacion = DetalleHabitacion::find($id)->delete();

        return redirect()->route('detalle-habitacions.index')
            ->with('success', 'DetalleHabitacion deleted successfully');
    }
}
