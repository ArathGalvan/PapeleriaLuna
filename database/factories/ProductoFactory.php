<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'=> \App\Models\Producto::all()->random()->id,
            'nombre'=> fake()->name(),
            'descripcion'=> fake()->name(),
            'categoria'=> fake()->name(),
            'precio'=> fake()->randomNumber(),
            
        ];
    }
}
