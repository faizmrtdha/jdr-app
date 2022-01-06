<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    Partner::create([
      'name' => 'INDONESIA POWER',
      'img' => 'storage\images\product\PHONSKA.png',
    ]);

    Partner::create([
      'name' => 'KRAKATAU STEEL',
      'img' => 'storage\images\product\PHONSKA.png',
    ]);

    Partner::create([
      'name' => 'VLADEX Ltd',
      'img' => 'storage\images\product\PHONSKA.png',
    ]);

    Partner::create([
      'name' => 'IZONE INDONESIA',
      'img' => 'storage\images\product\PHONSKA.png',
    ]);

    Partner::create([
      'name' => 'ZOLLER inc',
      'img' => 'storage\images\product\PHONSKA.png',
    ]);
  }
}
