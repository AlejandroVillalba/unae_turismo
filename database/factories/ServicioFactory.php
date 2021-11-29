<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServicioFactory extends Factory
{
    
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence,

          
        ];
    }
}
