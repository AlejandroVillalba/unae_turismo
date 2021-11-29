<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NormaFactory extends Factory
{
    
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence,
            'ingreso' => $this->faker->dateTime,
            'salida' => $this->faker->dateTime,

        ];
    }
}
