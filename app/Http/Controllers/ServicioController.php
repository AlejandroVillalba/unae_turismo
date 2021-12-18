<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    
    public function index()
    {
        $servicios = Servicio::all();

        return view('servicio.index', compact('servicios'))
            ->with('i');
    }

    
    public function create()
    {
        $servicio = new Servicio();
        return view('servicio.create', compact('servicio'));
    }

    
    public function store(Request $request)
    {
        request()->validate(Servicio::$rules);

        $servicio = Servicio::create($request->all());

        return redirect()->route('servicios.index')
            ->with('success', 'Servicio created successfully.');
    }

   
    public function show(Servicio $servicio)
    {

        return view('servicio.show', compact('servicio'));
    }

    
    public function edit(Servicio $servicio)
    {   

        return view('servicio.edit', compact('servicio'));
    }

    
    public function update(Request $request, Servicio $servicio)
    {
        request()->validate(Servicio::$rules);

        $servicio->update($request->all());

        return redirect()->route('servicios.index')
            ->with('success', 'Servicio updated successfully');
    }

   
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();

        return redirect()->route('servicios.index')
            ->with('success', 'Servicio deleted successfully');
    }
}
