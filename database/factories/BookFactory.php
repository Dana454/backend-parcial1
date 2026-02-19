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

// la diferencia entre el factory y el seeder es que el factory se utiliza para generar 
// datos de prueba de manera dinámica, mientras que el seeder se utiliza para poblar la base 
// de datos con datos específicos y predefinidos. El factory es más flexible y se puede usar 
// en pruebas unitarias o para generar grandes cantidades de datos, mientras que el seeder es
//  ideal para establecer datos iniciales o de referencia en la base de datos.

