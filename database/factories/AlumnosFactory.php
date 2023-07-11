<?php

namespace Database\Factories;

use App\Models\Alumnos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumnos>
 */
class AlumnosFactory extends Factory
{

    protected $model = Alumnos::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dui' => $this->faker->randomNumber(),
            'nombre' => $this->faker->name(),
            'correo' => $this->faker->unique()->email(),
            'direccion' => $this->faker->address(),
            'fecha' => $this->faker->date(),
           
        ];
    }
}
