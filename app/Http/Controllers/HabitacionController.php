<?php

namespace App\Http\Controllers;

use App\Models\Alojamiento;
use App\Models\DetalleHabitacion;
use App\Models\Habitacion;
use App\Models\TipoHabitacion;
use Illuminate\Http\Request;


class HabitacionController extends Controller
{
    public function __construct()
    {
        // protecion de url can:nombreDelPermiso especificamos a cual metodo queremos que se aplique
        $this->middleware('can:habitacions.index')->only('index'); 
        $this->middleware('can:habitacions.create')->only('create');
        $this->middleware('can:habitacions.show')->only('show');
        $this->middleware('can:habitacions.edit')->only('edit', 'update');
    }
    public function index()
    {
        $habitacions = Habitacion::all();

        return view('habitacion.index', compact('habitacions'))
            ->with('i');
    }

  
    public function create()
    {
        $habitacion = new Habitacion();

        $categories = TipoHabitacion::all();
        $alojamientos = Alojamiento::all();
        $detalleHabitacion = DetalleHabitacion::all();

        return view('habitacion.create', compact('habitacion','categories', 'alojamientos','detalleHabitacion' ));
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
        $categories = TipoHabitacion::all();
        $alojamientos = Alojamiento::all();
        $detalleHabitacion = DetalleHabitacion::all();
        return view('habitacion.edit', compact('habitacion','categories', 'alojamientos','detalleHabitacion'));
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
            ->with('eliminar', 'ok');
    }
}
