<?php

namespace App\Http\Controllers;

use App\Models\Norma;
use Illuminate\Http\Request;


class NormaController extends Controller
{
    public function __construct()
    {
        // protecion de url can:nombreDelPermiso especificamos a cual metodo queremos que se aplique
        $this->middleware('can:normas.index')->only('index'); 
        $this->middleware('can:normas.create')->only('create');
        $this->middleware('can:normas.show')->only('show');
        $this->middleware('can:normas.edit')->only('edit', 'update');
    }
    public function index()
    {
        $normas = Norma::all();

        return view('norma.index', compact('normas'))
            ->with('i');
    }

    
    public function create()
    {
        $norma = new Norma();
        return view('norma.create', compact('norma'));
    }

    public function store(Request $request)
    {
        request()->validate(Norma::$rules);

        $norma = Norma::create($request->all());

        return redirect()->route('normas.index')
            ->with('success', 'Norma creado con éxito.');
    }

   
    public function show(Norma $norma)
    {

        return view('norma.show', compact('norma'));
    }

   
    public function edit(Norma $norma)
    {

        return view('norma.edit', compact('norma'));
    }

  
    public function update(Request $request, Norma $norma)
    {
        request()->validate(Norma::$rules);

        $norma->update($request->all());

        return redirect()->route('normas.index')
            ->with('success', 'Norma Actualizado con éxito');
    }


    public function destroy(Norma $norma)
    {
        $norma->delete();

        return redirect()->route('normas.index')
            ->with('eliminar', 'ok');
    }
}
