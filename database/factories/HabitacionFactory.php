<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HabitacionFactory extends Factory
{
   
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence,
            'precio' => $this->faker->randomFloat(2, 0, 1),
            'descripcion' => $this->faker->text(300),
            'disponible' => rand(0,1),

            'tipo_habitacions_id' => rand(1,2),
            'alojamiento_id' => rand(1,2),
            'detalle_habitacion_id' => rand(1,2),
        ];
    }
}
