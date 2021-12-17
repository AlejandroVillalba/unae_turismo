<?php

namespace App\Http\Controllers;

use App\Models\TipoHabitacion;
use Illuminate\Http\Request;


class TipoHabitacionController extends Controller
{
    
    public function index()
    {
        $tipoHabitacions = TipoHabitacion::paginate();

        return view('tipo-habitacion.index', compact('tipoHabitacions'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoHabitacions->perPage());
    }

    
    public function create()
    {
        $tipoHabitacion = new TipoHabitacion();
        return view('tipo-habitacion.create', compact('tipoHabitacion'));
    }

   
    public function store(Request $request)
    {
        request()->validate(TipoHabitacion::$rules);

        $tipoHabitacion = TipoHabitacion::create($request->all());

        return redirect()->route('tipo-habitacions.index')
            ->with('success', 'TipoHabitacion created successfully.');
    }


    public function edit(TipoHabitacion  $tipoHabitacion)
    {
       
        return view('tipo-habitacion.edit', compact('tipoHabitacion'));
    }

   
    public function update(Request $request, TipoHabitacion $tipoHabitacion)
    {
        request()->validate(TipoHabitacion::$rules);

        $tipoHabitacion->update($request->all());

        return redirect()->route('tipo-habitacions.index')
            ->with('success', 'TipoHabitacion updated successfully');
    }

  
    public function destroy(TipoHabitacion  $tipoHabitacion)
    {
        $tipoHabitacion->delete();

        return redirect()->route('tipo-habitacions.index')
            ->with('success', 'TipoHabitacion deleted successfully');
    }
}
