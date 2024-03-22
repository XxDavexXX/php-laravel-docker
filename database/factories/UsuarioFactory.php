<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'vnombres' => $this->faker->firstName,
            'vapellidos' => $this->faker->lastName,
            'vedad' => $this->faker->numberBetween(18, 80),
            'vcorreo' => $this->faker->unique()->safeEmail,
        ];
    }
}

