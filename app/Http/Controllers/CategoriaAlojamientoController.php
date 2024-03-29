<?php

namespace App\Http\Controllers;

use App\Models\CategoriaAlojamiento;
use Illuminate\Http\Request;

class CategoriaAlojamientoController extends Controller
{
    public function __construct()
    {
        // protecion de url can:nombreDelPermiso especificamos a cual metodo queremos que se aplique
        $this->middleware('can:categoria-alojamientos.index')->only('index'); 
        $this->middleware('can:categoria-alojamientos.create')->only('create');
        $this->middleware('can:categoria-alojamientos.show')->only('show');
        $this->middleware('can:categoria-alojamientos.edit')->only('edit', 'update');
    }   
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
            ->with('success', 'Categoria Alojamiento creado con éxito.');
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
            ->with('success', 'Categoria Alojamiento Actualizado con éxito');
    }

  
    public function destroy(CategoriaAlojamiento $categoriaAlojamiento)
    {
        $categoriaAlojamiento->delete();

        return redirect()->route('categoria-alojamientos.index')
            ->with('eliminar', 'ok');
    }
}
