<?php

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
        factory(App\Role::class)->create([
            'name' => 'Customer',
            'slug' => 'customer'
        ]);

        factory(App\Role::class)->create([
            'name' => 'Admin',
            'slug' => 'admin'
        ]);

        factory(App\Role::class)->create([
            'name' => 'Finance',
            'slug' => 'finance'
        ]);

        factory(App\Role::class)->create([
            'name' => 'Leader',
            'slug' => 'leader'
        ]);

        factory(App\Role::class)->create([
            'name' => 'Staff',
            'slug' => 'staff'
        ]);
    }
}
