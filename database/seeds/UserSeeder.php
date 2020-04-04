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
            'name' => 'Sale User One',
            'email' => 'sale@gmail.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'Sale User Two',
            'email' => 'sale2@gmail.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'Service User',
            'email' => 'service@gmail.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'Service User Two',
            'email' => 'service2@gmail.com',
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
