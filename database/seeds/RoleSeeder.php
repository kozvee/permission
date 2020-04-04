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
            'name' => 'Admin',
            'slug' => 'admin'
        ]);

        factory(App\Role::class)->create([
            'name' => 'Sale & Marketing',
            'slug' => 'sale-marketing'
        ]);

        factory(App\Role::class)->create([
            'name' => 'Customer Service',
            'slug' => 'customer-service'
        ]);

        factory(App\Role::class)->create([
            'name' => 'Staff',
            'slug' => 'staff'
        ]);
    }
}
