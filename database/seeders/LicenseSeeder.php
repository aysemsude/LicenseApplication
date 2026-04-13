<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\License;
use Illuminate\Support\Str;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    //5 licenses for every product
    public function run(): void
    {
        for($productId=1; $productId<=3;$productId++){
            for($i=0;$i<5;$i++){
                License::create(['product_id'=>$productId,'user_id'=>null,'license_key'=>Str::uuid()]);
            }
        }
    }
}
