<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reserva;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserva>
 */
class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'fecha_entrada'=>fake()->datetime(),
        'fecha_salida'=>fake()->datetime(),
        'habitacion_id'=>fake()->numberBetween(1,500),
        'huesped_id'=>fake()->numberBetween(1,500),
        'numero_de_huespedes'=>fake()->numberBetween(1,500),
        ];
    }
}
