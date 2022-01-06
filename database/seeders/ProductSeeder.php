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

      Product::create([
        'title' => 'Phonska',
        'category' => 'Fertilized',
        'img' => 'storage\images\product\PHONSKA.png',
        // 'img' => 'product\PHONSKA.png',
        'desc' => '',
      ]);

      Product::create([
        'title' => 'KCI',
        'category' => 'Fertilized',
        'img' => 'storage\images\product\kcl.png',
        // 'img' => 'product\kcl.png',
        'desc' => '',
      ]);

      Product::create([
        'title' => 'Petro Ponic',
        'category' => 'Non Fertilized',
        'img' => 'storage\images\product\petroponic.png',
        // 'img' => 'product\petroponic.png',
        'desc' => '',
      ]);
      Product::create([
        'title' => 'Petro Cas',
        'category' => 'Non Fertilized',
        'img' => 'storage\images\product\za.png',
        // 'img' => 'product\za.png',
        'desc' => '',
      ]);


    }
}
