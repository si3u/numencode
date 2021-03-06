<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Numencode\Models\User\Manager;

class ManagersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $items = [
            [
                'id'         => '1',
                'name'       => 'Admin Developer',
                'email'      => 'info@numencode.com',
                'password'   => '$2y$10$5QYFCfkd5lSOxX20i0w2p.hwSupOP.YcJxRRoL8073FzXQXADTDZy',
                'phone'      => $faker->phoneNumber,
                'avatar'     => '/uploads/sample01_600x600.jpg',
                'tasks'      => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '2',
                'name'       => 'Manager Developer',
                'email'      => 'manager@dev.app',
                'password'   => '$2y$10$5QYFCfkd5lSOxX20i0w2p.hwSupOP.YcJxRRoL8073FzXQXADTDZy',
                'phone'      => $faker->phoneNumber,
                'avatar'     => '/uploads/sample02_600x600.jpg',
                'tasks'      => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ];

        DB::table('managers')->insert($items);

        factory(Manager::class, 8)->create();
    }
}
