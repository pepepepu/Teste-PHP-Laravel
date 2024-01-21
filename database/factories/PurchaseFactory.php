<?php
namespace Database\Factories;
use App\Models\Clients;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $clientIDs = Clients::pluck('id')->toArray();
        $productIDs = Product::pluck('id')->toArray();

        return [
            'cliente_id' => $this->faker->randomElement($clientIDs),
            'produto_id' => $this->faker->randomElement($productIDs),
            'Quantidade' => $this->faker->numberBetween(1, 10),
        ];
    }
}
