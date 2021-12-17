<?php

namespace Database\Seeders;

use App\Models\TipoHabitacion;
use Illuminate\Database\Seeder;

class TipoHabitacionSeeder extends Seeder
{
    
    public function run()
    {
        TipoHabitacion::create(['nombre' => 'Simple']);
        TipoHabitacion::create(['nombre' => 'Matrimonial']);
    }
}
