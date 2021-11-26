<?php

namespace App\Http\Controllers;

use App\Models\Alojamiento;
use Illuminate\Http\Request;


class AlojamientoController extends Controller
{
  
    public function index()
    {
        $alojamientos = Alojamiento::paginate();

        return view('alojamiento.index', compact('alojamientos'))
            ->with('i', (request()->input('page', 1) - 1) * $alojamientos->perPage());
    }

        public function create()
    {
        $alojamiento = new Alojamiento();
        return view('alojamiento.create', compact('alojamiento'));
    }

        public function store(Request $request)
    {
        request()->validate(Alojamiento::$rules);

        $alojamiento = Alojamiento::create($request->all());

        return redirect()->route('alojamientos.index')
            ->with('success', 'Alojamiento created successfully.');
    }

   
    public function show($id)
    {
        $alojamiento = Alojamiento::find($id);

        return view('alojamiento.show', compact('alojamiento'));
    }

   
    public function edit($id)
    {
        $alojamiento = Alojamiento::find($id);

        return view('alojamiento.edit', compact('alojamiento'));
    }


    public function update(Request $request, Alojamiento $alojamiento)
    {
        request()->validate(Alojamiento::$rules);

        $alojamiento->update($request->all());

        return redirect()->route('alojamientos.index')
            ->with('success', 'Alojamiento updated successfully');
    }

   
    public function destroy($id)
    {
        $alojamiento = Alojamiento::find($id)->delete();

        return redirect()->route('alojamientos.index')
            ->with('success', 'Alojamiento deleted successfully');
    }
}
