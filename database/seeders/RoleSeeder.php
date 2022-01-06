<?php

namespace Database\Seeders;


use App\Models\Roles;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Roles::create([
        'role-name' => 'admin',
        'is_active' => '1',
        'rm-view' => 1,
        'rm-update' => 1,
        'rm-create' => 1,
        'rm-delete' => 1,
        'cm-view' => 1,
        'cm-update' => 1,
        'cm-create' => 1,
        'cm-delete' => 1,
        'um-view' => 1,
        'um-update' => 1,
        'um-create' => 1,
        'um-delete' => 1,
      ]);

      Roles::create([
        'role-name' => 'user',
        'is_active' => '1',
        'rm-view' => 0,
        'rm-update' => 0,
        'rm-create' => 0,
        'rm-delete' => 0,
        'cm-view' => 1,
        'cm-update' => 1,
        'cm-create' => 1,
        'cm-delete' => 1,
        'um-view' => 1,
        'um-update' => 1,
        'um-create' => 1,
        'um-delete' => 1,
      ]);

      Roles::create([
        'role-name' => 'guest',
        'is_active' => '1',
        'rm-view' => 0,
        'rm-update' => 0,
        'rm-create' => 0,
        'rm-delete' => 0,
        'cm-view' => 1,
        'cm-update' => 1,
        'cm-create' => 1,
        'cm-delete' => 1,
        'um-view' => 0,
        'um-update' => 0,
        'um-create' => 0,
        'um-delete' => 0,
      ]);


    }
}
