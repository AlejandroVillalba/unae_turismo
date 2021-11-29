<?php

namespace App\Http\Controllers;

use App\Models\Norma;
use Illuminate\Http\Request;

/**
 * Class NormaController
 * @package App\Http\Controllers
 */
class NormaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $normas = Norma::paginate();

        return view('norma.index', compact('normas'))
            ->with('i', (request()->input('page', 1) - 1) * $normas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $norma = new Norma();
        return view('norma.create', compact('norma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Norma::$rules);

        $norma = Norma::create($request->all());

        return redirect()->route('normas.index')
            ->with('success', 'Norma created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $norma = Norma::find($id);

        return view('norma.show', compact('norma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $norma = Norma::find($id);

        return view('norma.edit', compact('norma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Norma $norma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Norma $norma)
    {
        request()->validate(Norma::$rules);

        $norma->update($request->all());

        return redirect()->route('normas.index')
            ->with('success', 'Norma updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $norma = Norma::find($id)->delete();

        return redirect()->route('normas.index')
            ->with('success', 'Norma deleted successfully');
    }
}
