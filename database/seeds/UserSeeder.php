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
        ]);

        factory(App\User::class)->create([
            'name' => 'Admin Two',
            'email' => 'admin2@gmail.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'Finance',
            'email' => 'finance@gmail.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'Finance Two',
            'email' => 'finance2@gmail.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'Leader',
            'email' => 'leader@gmail.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'Leader Two',
            'email' => 'leader2@gmail.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'Staff',
            'email' => 'staff@gmail.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'Staff Two',
            'email' => 'staff2@gmail.com',
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
