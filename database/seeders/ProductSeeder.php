<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create(['name' => 'Lemari', 'price' => 10.00]);
        Product::create(['name' => 'meja makan ', 'price' => 20.00]);
        Product::create(['name' => 'sofa', 'price' => 30.00]);
    }
}
