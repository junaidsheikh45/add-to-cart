<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                "name"=>"Apple Macbook Pro 6",
                "details"=>"Apple M1 Pro, 16 GPU, 16 Gb, 256 SSD",
                "description"=>"Apple MacBook Pro is a macOS laptop with a 13.30-inch display that has a resolution of 2560x1600 pixels. It is powered by a Core i5 processor and it comes with 12GB of RAM. The Apple MacBook Pro packs 512GB of SSD storage.",
                "brand"=>"Apple",
                "price"=> 2499,
                "shipping_cost"=>25,
                "image_path"=>"storage/product.png",
            ],
            [
                "name"=>"Samsung Galaxy Book Pro",
                "details"=>"Samsung Galaxy Book Pro, 16 GPU, 16 Gb, 256 SSD",
                "description"=>"PC power that’s smartphone thin. Our lightest Galaxy Book yet gives you a powerful Intel® 11th Gen Core™ processor, Intel® Evo™ certification, an advanced AMOLED screen and comes equipped with our latest wi-fi chip. Finish important projects, download huge files fast or watch movies in brilliant color. Discover the perfect mix of portability and productivity.",
                "brand"=>"Samsung",
                "price"=>1400,
                "shipping_cost"=>25,
                "image_path"=>"storage/product2.png",
                
            ]
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
