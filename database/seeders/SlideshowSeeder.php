<?php

namespace Database\Seeders;

use App\Models\Slideshow;
use Illuminate\Database\Seeder;

class SlideshowSeeder extends Seeder
{

    public function run()
    {

      Slideshow::create([
        'title' => 'Solution for Specific Needs',
        'desc' => 'With advance technology, we are able to Produce Various Fertilizer Formulas as the Solution of Specific Needs for Agroindustry Player',
        'img' => 'storage\images\slideshow\ss1.jpg',
        // 'img' => 'slideshow\ss1.jpg',
      ]);
      Slideshow::create([
          'title' => 'Proper Fertilization Solutions',
          'desc' => 'Our Commitment is Give Good Service and Proper Fertilization Solution at All Over the Country',
          'img' => 'storage\images\slideshow\ss2.jpg',
          // 'img' => 'slideshow\ss2.jpg',
      ]);
      Slideshow::create([
          'title' => 'Pest Control Solutions',
          'desc' => 'Together with Subsidiary Company of Petrokimia Gresik Group, We also Provide Solution for Pest Control in order to Maintain the Plant Productivity',
          'img' => 'storage\images\slideshow\ss3.jpg',
          // 'img' => 'slideshow\ss3.jpg',
      ]);

    }
}
