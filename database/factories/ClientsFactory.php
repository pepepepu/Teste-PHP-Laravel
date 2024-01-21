<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NomeCliente' => $this->faker->name,
            'CPF' => $this->faker->unique()->numerify('###########'),
            'Email' => $this->faker->unique()->safeEmail,
        ];
    }
}
