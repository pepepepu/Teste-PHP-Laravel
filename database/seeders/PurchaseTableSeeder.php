<?php

namespace Database\Seeders;

use App\Models\Clients;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Database\Seeder;

class PurchaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Purchase::factory(10)->create();
    }
}
