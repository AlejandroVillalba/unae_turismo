<?php

namespace App\Http\Controllers;

use App\Models\Alojamiento;
use App\Models\CategoriaAlojamiento;
use Illuminate\Http\Request;


class AlojamientoController extends Controller
{

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
            ->with('success', 'Alojamiento created successfully.');
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
            ->with('success', 'Alojamiento updated successfully');
    }

    
    public function destroy(Alojamiento  $alojamiento)
    {
        $alojamiento->delete();

        return redirect()->route('alojamientos.index')
            ->with('eliminar', 'ok');
    }
}
