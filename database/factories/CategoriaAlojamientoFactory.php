<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaAlojamientoFactory extends Factory
{
  
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence,
        ];
    }
}
