<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{

  public function run()
  {

    $this->call([
      UserSeeder::class,
      RoleSeeder::class,


      SlideshowSeeder::class,
      QuotesSeeder::class,
      ProductSeeder::class,
      ProfileSeeder::class,
      ClientSeeder::class,
      PartnerSeeder::class,
    ]);
  }
}
