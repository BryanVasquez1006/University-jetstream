<?php

namespace Database\Factories;

use App\Models\Maestros;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaestrosFactory extends Factory
{
    protected $model = Maestros::class;
    /**
     * Define the model's default state.
     * 
     * @return array<string, 
     */
    
    public function definition():array
    {
        return [
            'nombre' => $this->faker->name(),
            'correo' => $this->faker->unique()->email(),
            'direccion' => $this->faker->address(),
            'fecha' => $this->faker->date(),
            'clase' => $this->faker->randomElement(['Matemáticas', 'Historia', 'Ciencias'])
        ];
    }
}