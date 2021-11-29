<?php

namespace Database\Seeders;

use App\Models\Alojamiento;
use App\Models\CategoriaAlojamiento;
use App\Models\DetalleHabitacion;
use App\Models\Habitacion;
use App\Models\Norma;
use App\Models\Servicio;
use App\Models\TipoHabitacion;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        User::factory(25)->create();

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        CategoriaAlojamiento::factory(10)->create();
        TipoHabitacion::factory(5)->create();
        Alojamiento::factory(5)->create();
        Servicio::factory(15)->create();
        Habitacion::factory(5)->create();
        DetalleHabitacion::factory(5)->create();
        Norma::factory(5)->create();
       
    }
}
