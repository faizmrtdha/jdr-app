<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {

      User::create([
        'username' => 'admin',
        'email' => 'admin@admin.com',
        'is_active' => '1',
        'password' => bcrypt('admin'),
        'img' => 'https://ui-avatars.com/api/?name=admin&color=7F9CF5&background=EBF4FF',
        'role_id' => '1',
      ]);
      User::create([
          'username' => 'user',
          'email' => 'user@admin.com',
          'is_active' => '1',
          'password' => bcrypt('user'),
          'img' => 'https://ui-avatars.com/api/?name=user&color=7F9CF5&background=EBF4FF',
          'role_id' => '2',
      ]);
      User::create([
          'username' => 'editor',
          'email' => 'edit@admin.com',
          'is_active' => '1',
          'password' => bcrypt('editor'),
          'img' => 'https://ui-avatars.com/api/?name=editor&color=7F9CF5&background=EBF4FF',
          'role_id' => '3',
      ]);


    }
}
