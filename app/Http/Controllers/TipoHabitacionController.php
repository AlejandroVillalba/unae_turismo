<?php

namespace App\Http\Controllers;

use App\Models\TipoHabitacion;
use Illuminate\Http\Request;


class TipoHabitacionController extends Controller
{
    public function __construct()
    {
        // protecion de url can:nombreDelPermiso especificamos a cual metodo queremos que se aplique
        $this->middleware('can:tipo-habitacions.index')->only('index'); 
        $this->middleware('can:tipo-habitacions.create')->only('create');
        $this->middleware('can:tipo-habitacions.show')->only('show');
        $this->middleware('can:tipo-habitacions.edit')->only('edit', 'update');
    }
    
    public function index()
    {
        $tipoHabitacions = TipoHabitacion::all();

        return view('tipo-habitacion.index', compact('tipoHabitacions'))
            ->with('i');
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
            ->with('success', 'Tipo Habitacion creado con éxito.');
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
            ->with('success', 'Tipo Habitacion Actualizado con éxito');
    }

  
    public function destroy(TipoHabitacion  $tipoHabitacion)
    {
        $tipoHabitacion->delete();

        return redirect()->route('tipo-habitacions.index')
            ->with('eliminar', 'ok');
    }
}
