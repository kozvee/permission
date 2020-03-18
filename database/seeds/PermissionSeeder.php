<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Permission::class)->create([
            'name' => 'View Customer',
            'slug' => 'view-customer'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'Create Customer',
            'slug' => 'create-customer'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'Edit Customer',
            'slug' => 'edit-customer'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'Delete ustomer',
            'slug' => 'delete-customer'
        ]);
    }
}
