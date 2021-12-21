<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlojamientoFactory extends Factory
{
    
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'imagenes' => $this->faker->imageUrl(1280, 720),
            'direccion' => $this->faker->address,
            'contacto_nombre' => $this->faker->name,
            'telefono' => $this->faker->phoneNumber,
            'descripcion' => $this->faker->text(300),

            'user_id' => rand(1,2),
            'categoria_alojamiento_id' => rand(1,2),
        ];
    }
}
