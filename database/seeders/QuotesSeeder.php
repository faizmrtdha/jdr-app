<?php

namespace Database\Seeders;

use App\Models\Quotes;
use Illuminate\Database\Seeder;

class QuotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Quotes::create([
        'name' => 'Digna Jatiningsih',
        'position' => 'Operation and Production Director',
        'quote' => 'Innovation is a natural instinct for the adaptation of Petrokimia Personnel in facing the inevitability of change in order to maintain sustainable existence and productivity to emphasize Petrokimia Gresik as a provider of agroindustry solutions that support national food security',
        'img' => '',
      ]);
      Quotes::create([
        'name' => 'Digna Jatiningsih',
        'position' => 'Operation and Production Director',
        'quote' => 'Innovation is a natural instinct for the adaptation of Petrokimia Personnel in facing the inevitability of change in order to maintain sustainable existence and productivity to emphasize Petrokimia Gresik as a provider of agroindustry solutions that support national food security',
        'img' => '',
      ]);
      Quotes::create([
        'name' => 'Dwi Satriyo Annurogo',
        'position' => 'President Director',
        'quote' => 'Realizing ideas and creativity is the key to success. Ideas and Creativity do not have a hierarchy, so anyone can make it happen.',
        'img' => '',
      ]);


    }
}
