<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetalleHabitacionFactory extends Factory
{
    
    public function definition()
    {
        return [
            'cama' => $this->faker->sentence,
            'cantidadCama'  => rand(1,2),
            'cantidadPersona' => rand(1,2),
            'dimension' => $this->faker->sentence,
            'banos' => $this->faker->sentence,
            
        ];
    }
}
