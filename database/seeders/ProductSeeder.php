<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

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
                'nm_product' =>'teh pucuk',
                'price' =>'15000',
                'stok'=>'12'
            ],
            [
                'nm_product' =>'teh sosro',
                'price' =>'15000',
                'stok'=>'12'
            ],
            [
                'nm_product' =>'teh sari wangi',
                'price' =>'15000',
                'stok'=>'12'
            ],
            [
                'nm_product' =>'teh kotak',
                'price' =>'15000',
                'stok'=>'12'
            ],
        ];
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
