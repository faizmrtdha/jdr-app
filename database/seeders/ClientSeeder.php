<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    Client::create([
      'name' => 'C&F',
      'img' => 'storage\images\product\PHONSKA.png',
    ]);
  }
}
