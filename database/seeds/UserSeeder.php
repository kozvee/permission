<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role_id' => 2
        ]);

        factory(App\User::class)->create([
            'name' => 'Admin Two',
            'email' => 'admin2@gmail.com',
            'role_id' => 2
        ]);

        factory(App\User::class)->create([
            'name' => 'Finance',
            'email' => 'finance@gmail.com',
            'role_id' => 3
        ]);

        factory(App\User::class)->create([
            'name' => 'Finance Two',
            'email' => 'finance2@gmail.com',
            'role_id' => 3
        ]);

        factory(App\User::class)->create([
            'name' => 'Leader',
            'email' => 'leader@gmail.com',
            'role_id' => 4
        ]);

        factory(App\User::class)->create([
            'name' => 'Leader Two',
            'email' => 'leader2@gmail.com',
            'role_id' => 4
        ]);

        factory(App\User::class)->create([
            'name' => 'Staff',
            'email' => 'staff@gmail.com',
            'role_id' => 5
        ]);

        factory(App\User::class)->create([
            'name' => 'Staff Two',
            'email' => 'staff2@gmail.com',
            'role_id' => 5
        ]);

        factory(App\User::class)->create([
            'name' => 'Customer',
            'email' => 'customer@gmail.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'Customer Two',
            'email' => 'customer2@gmail.com',
        ]);
    }
}
