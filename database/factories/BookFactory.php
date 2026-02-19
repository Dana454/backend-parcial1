<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "titulo" => $this->faker->sentence(),
            "descripcion" => $this->faker->paragraph(),
            "ISNB" => $this->faker->numberBetween(9000000000000,9999999999999),
            "copias_disponibles" => $this->faker->numberBetween(1, 10),
            "estado" => $this->faker->boolean(),
    
        ];
    }
}


