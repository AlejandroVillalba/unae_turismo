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

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CategoriaAlojamientoSeeder::class,
            TipoHabitacionSeeder::class,
        ]);
       

        CategoriaAlojamiento::factory()->count(10)->create();
        TipoHabitacion::factory(25)->create();
        DetalleHabitacion::factory(25)->create();
        Alojamiento::factory(25)->create();
        Habitacion::factory(25)->create();
        Servicio::factory(25)->create();
        Norma::factory(25)->create();
       
    }
}
