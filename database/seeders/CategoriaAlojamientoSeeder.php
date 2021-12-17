<?php

namespace Database\Seeders;

use App\Models\CategoriaAlojamiento;
use Illuminate\Database\Seeder;

class CategoriaAlojamientoSeeder extends Seeder
{
  
    public function run()
    {
        CategoriaAlojamiento::create(['nombre' => 'Hotel']);
        CategoriaAlojamiento::create(['nombre' => 'Departamento']);
        CategoriaAlojamiento::create(['nombre' => 'Casa']);
    }
}
