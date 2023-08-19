<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Huesped;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Huesped>
 */
class HuespedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>fake()->firstName(),
            'apellido'=>fake()->lastName(),
            'correo_electronico'=>fake()->Email(),
            'telefono'=>fake()->numerify('########')
        ];
    }
}
