<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compra>
 */
class CompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'noProductos' => $this->faker->randomNumber(2, false), 
            'totalPrecio' => $this->faker->randomNumber(4, false), 
            'fecha' => $this->faker->date(),
        ];
    }
}
