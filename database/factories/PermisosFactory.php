<?php

namespace Database\Factories;
use App\Models\Permisos;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Permisos>
 */
class PermisosFactory extends Factory
{

    protected $model = Permisos::class;
    /**
     * Define the model's default state.
     * 
     * @return array<string, 
     */
    public function definition(): array
    {
        return [
            
            'correo' => $this->faker->unique->email(),
            'permiso' => $this->faker->name(),
            'estado'=> $this->faker->state()
        ];
    }
}
