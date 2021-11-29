<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetalleHabitacionFactory extends Factory
{
    
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence,

            'habitacion_id' => rand(1,2),
        ];
    }
}
