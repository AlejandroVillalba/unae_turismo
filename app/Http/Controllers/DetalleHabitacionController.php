<?php

namespace App\Http\Controllers;

use App\Models\DetalleHabitacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DetalleHabitacionController extends Controller
{
    public function __construct()
    {
        // protecion de url can:nombreDelPermiso especificamos a cual metodo queremos que se aplique
        $this->middleware('can:detalle-habitacions.index')->only('index'); 
        $this->middleware('can:detalle-habitacions.create')->only('create');
        $this->middleware('can:detalle-habitacions.show')->only('show');
        $this->middleware('can:detalle-habitacions.edit')->only('edit', 'update');
    }
    public function index()
    {
        $detalleHabitacions = DetalleHabitacion::all();

        return view('detalle-habitacion.index', compact('detalleHabitacions'))
            ->with('i');
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

        return  redirect('habitacions/create')
            ->with('success', 'Detalle de Habitacion creado con éxito.');
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
            ->with('success', 'Detalle Habitacion Actualizado con éxito');
    }

   
    public function destroy(DetalleHabitacion  $detalleHabitacion)
    {
        $detalleHabitacion->delete();

        return redirect()->route('detalle-habitacions.index')
            ->with('eliminar', 'ok');
    }
}
