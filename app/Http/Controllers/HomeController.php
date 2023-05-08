<?php

namespace App\Http\Controllers;

use App\Models\Alojamiento;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $alojamientos = Alojamiento::all();


    
        return view('home', compact('alojamientos'))
            ->with('i');
    }
}
