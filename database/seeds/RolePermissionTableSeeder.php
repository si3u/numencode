<?php

use Illuminate\Database\Seeder;

class RolePermissionTableSeeder extends Seeder
{
    public function run()
    {
        $items = [
            ['role_id' => '1', 'permission_id' => '1'],
            ['role_id' => '2', 'permission_id' => '1'],
            ['role_id' => '1', 'permission_id' => '2'],
            ['role_id' => '1', 'permission_id' => '3'],
            ['role_id' => '1', 'permission_id' => '4'],
            ['role_id' => '3', 'permission_id' => '5'],
            ['role_id' => '4', 'permission_id' => '5'],
            ['role_id' => '5', 'permission_id' => '5'],
            ['role_id' => '6', 'permission_id' => '5'],
            ['role_id' => '4', 'permission_id' => '6'],
            ['role_id' => '5', 'permission_id' => '6'],
            ['role_id' => '6', 'permission_id' => '6'],
            ['role_id' => '4', 'permission_id' => '7'],
            ['role_id' => '5', 'permission_id' => '7'],
            ['role_id' => '6', 'permission_id' => '7'],
            ['role_id' => '5', 'permission_id' => '8'],
            ['role_id' => '6', 'permission_id' => '8'],
            ['role_id' => '6', 'permission_id' => '9'],
            ['role_id' => '6', 'permission_id' => '10'],
        ];

        DB::table('role_permission')->insert($items);
    }
}