<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetalleHabitacionFactory extends Factory
{
    
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence,
            'cantidadCama'  => 1,
            'cantidadPersona' => 2,
            'dimension' => $this->faker->sentence,
            'banos' => $this->faker->sentence,
            
        ];
    }
}
