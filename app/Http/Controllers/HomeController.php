<?php

namespace App\Http\Controllers;

use App\Models\Alojamiento;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $alojamientos = Alojamiento::paginate(6);


    
        return view('home', compact('alojamientos'))
            ->with('i');
    }
}
