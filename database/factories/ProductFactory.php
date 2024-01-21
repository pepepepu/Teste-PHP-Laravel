<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'CodBarras' => $this->faker->unique()->numerify('####################'),
            'NomeProduto' => $this->faker->word,
            'ValorUnitario' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
