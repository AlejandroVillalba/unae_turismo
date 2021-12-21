<?php

namespace App\Http\Controllers;

use App\Models\CategoriaAlojamiento;
use Illuminate\Http\Request;

class CategoriaAlojamientoController extends Controller
{
    
    public function index()
    {
        $categoriaAlojamientos = CategoriaAlojamiento::all();

        return view('categoria-alojamiento.index', compact('categoriaAlojamientos'))
            ->with('i');
    }

   
    public function create()
    {
        $categoriaAlojamiento = new CategoriaAlojamiento();
        return view('categoria-alojamiento.create', compact('categoriaAlojamiento'));
    }

   
    public function store(Request $request)
    {
        request()->validate(CategoriaAlojamiento::$rules);

        $categoriaAlojamiento = CategoriaAlojamiento::create($request->all());

        return redirect()->route('categoria-alojamientos.index')
            ->with('success', 'CategoriaAlojamiento created successfully.');
    }

    
    public function edit($id)
    {
        $categoriaAlojamiento = CategoriaAlojamiento::find($id);

        return view('categoria-alojamiento.edit', compact('categoriaAlojamiento'));
    }

   
    public function update(Request $request, CategoriaAlojamiento $categoriaAlojamiento)
    {
        request()->validate(CategoriaAlojamiento::$rules);

        $categoriaAlojamiento->update($request->all());

        return redirect()->route('categoria-alojamientos.index')
            ->with('success', 'CategoriaAlojamiento updated successfully');
    }

  
    public function destroy(CategoriaAlojamiento $categoriaAlojamiento)
    {
        $categoriaAlojamiento->delete();

        return redirect()->route('categoria-alojamientos.index')
            ->with('eliminar', 'ok');
    }
}
