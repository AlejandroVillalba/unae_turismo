<?php

namespace App\Http\Controllers;

use App\Models\Alojamiento;
use App\Models\CategoriaAlojamiento;
use Illuminate\Http\Request;


class AlojamientoController extends Controller
{
    public function __construct()
    {
        // protecion de url can:nombreDelPermiso especificamos a cual metodo queremos que se aplique
        $this->middleware('can:alojamientos.index')->only('index'); 
        $this->middleware('can:alojamientos.create')->only('create');
        $this->middleware('can:alojamientos.show')->only('show');
        $this->middleware('can:alojamientos.edit')->only('edit', 'update');
    }
    public function index()
    {
        $alojamientos = Alojamiento::all();

        return view('alojamiento.index', compact('alojamientos'))
            ->with('i');
    }

    
    public function create()
    {
        $alojamiento = new Alojamiento();
        $categories = CategoriaAlojamiento::all();

        return view('alojamiento.create', compact('alojamiento', 'categories'));
    }

    
    public function store(Request $request)
    {
        request()->validate(Alojamiento::$rules);

        $alojamiento = Alojamiento::create($request->all());
  
        return redirect()->route('alojamientos.index')
            ->with('success', 'Alojamiento creado con éxito.');
    }

    
    public function show(Alojamiento $alojamiento)
    {

        return view('alojamiento.show', compact('alojamiento'));
    }

   
    public function edit(Alojamiento $alojamiento)
    {
      
        return view('alojamiento.edit', compact('alojamiento'));
    }

  
    public function update(Request $request, Alojamiento $alojamiento)
    {
        request()->validate(Alojamiento::$rules);

        $alojamiento->update($request->all());

        return redirect()->route('alojamientos.index')
            ->with('success', 'Alojamiento Actualizado con éxito');
    }

    
    public function destroy(Alojamiento  $alojamiento)
    {
        $alojamiento->delete();

        return redirect()->route('alojamientos.index')
            ->with('eliminar', 'ok');
    }
}
