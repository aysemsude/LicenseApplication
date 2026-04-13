<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            ['name'=>'Xampp','price'=>49.00],
            ['name'=>'Visual Studio License','price'=>50.00],
            ['name'=>'JetBrains','price'=>51.00],



        ]);
    }
}
