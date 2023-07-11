<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clases>
 */
class ClasesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'clase' => $this->faker->randomElement(['Matemáticas', 'Historia', 'Ciencias']),
            'maestro' => $this->faker->name(),
            'alumnos_ins' => $this->faker->name(),
            
        ];
    }
}
