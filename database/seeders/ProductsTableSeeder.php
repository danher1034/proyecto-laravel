<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = [
            'Camiseta 1 equipacion',
            'Camiseta 2 equipacion',
            'Camiseta 3 equipacion',
            'Pantalones 1 equipacion',
            'Pantalones 2 equipacion',
            'Pantalones 3 equipacion',
            'Medias 1 equipacion',
            'Medias 2 equipacion',
            'Medias 3 equipacion',
            'Balon La Liga',
        ];

        foreach ($products as $productName) {
            Product::create([
                'name' => $productName,
                'price' => rand(30, 100),
                'stock' => 1
            ]);
        }
    }
}
