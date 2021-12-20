<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use Illuminate\Http\Request;


class HabitacionController extends Controller
{
   
    public function index()
    {
        $habitacions = Habitacion::paginate();

        return view('habitacion.index', compact('habitacions'))
            ->with('i');
    }

  
    public function create()
    {
        $habitacion = new Habitacion();
        return view('habitacion.create', compact('habitacion'));
    }

    
    public function store(Request $request)
    {
        request()->validate(Habitacion::$rules);

        $habitacion = Habitacion::create($request->all());

        return redirect()->route('habitacions.index')
            ->with('success', 'Habitacion created successfully.');
    }

  
    public function show(Habitacion  $habitacion)
    {

        return view('habitacion.show', compact('habitacion'));
    }

    
    public function edit(Habitacion  $habitacion)
    {

        return view('habitacion.edit', compact('habitacion'));
    }

    
    public function update(Request $request, Habitacion $habitacion)
    {
        request()->validate(Habitacion::$rules);

        $habitacion->update($request->all());

        return redirect()->route('habitacions.index')
            ->with('success', 'Habitacion updated successfully');
    }

    
    public function destroy(Habitacion  $habitacion)
    {
        $habitacion->delete();

        return redirect()->route('habitacions.index')
            ->with('success', 'Habitacion deleted successfully');
    }
}
