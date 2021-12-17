<?php

namespace App\Http\Controllers;

use App\Models\DetalleHabitacion;
use Illuminate\Http\Request;


class DetalleHabitacionController extends Controller
{
    
    public function index()
    {
        $detalleHabitacions = DetalleHabitacion::paginate();

        return view('detalle-habitacion.index', compact('detalleHabitacions'))
            ->with('i', (request()->input('page', 1) - 1) * $detalleHabitacions->perPage());
    }

  
    public function create()
    {
        $detalleHabitacion = new DetalleHabitacion();
        return view('detalle-habitacion.create', compact('detalleHabitacion'));
    }

   
    public function store(Request $request)
    {
        request()->validate(DetalleHabitacion::$rules);

        $detalleHabitacion = DetalleHabitacion::create($request->all());

        return redirect()->route('detalle-habitacions.index')
            ->with('success', 'DetalleHabitacion created successfully.');
    }

  
    public function show(DetalleHabitacion  $detalleHabitacion)
    {
       
        return view('detalle-habitacion.show', compact('detalleHabitacion'));
    }

    public function edit(DetalleHabitacion  $detalleHabitacion)
    {

        return view('detalle-habitacion.edit', compact('detalleHabitacion'));
    }

   
    public function update(Request $request, DetalleHabitacion $detalleHabitacion)
    {
        request()->validate(DetalleHabitacion::$rules);

        $detalleHabitacion->update($request->all());

        return redirect()->route('detalle-habitacions.index')
            ->with('success', 'DetalleHabitacion updated successfully');
    }

   
    public function destroy(DetalleHabitacion  $detalleHabitacion)
    {
        $detalleHabitacion->delete();

        return redirect()->route('detalle-habitacions.index')
            ->with('success', 'DetalleHabitacion deleted successfully');
    }
}
