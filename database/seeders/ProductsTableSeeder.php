<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = new Products;
        $products->name = "LUX";
        $products->description = "Sabun Badan";
        $products->price = "15000";
        $products->category_id = "123";
        $products->save();
    }
}
