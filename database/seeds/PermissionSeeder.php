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
            'name' => 'Delete Customer',
            'slug' => 'delete-customer'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'View Issue',
            'slug' => 'view-issue'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'Create Issue',
            'slug' => 'create-issue'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'Edit Issue',
            'slug' => 'edit-issue'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'Delete Issue',
            'slug' => 'delete-issue'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'View Router',
            'slug' => 'view-router'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'Create Router',
            'slug' => 'create-router'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'Edit Router',
            'slug' => 'edit-router'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'Delete Router',
            'slug' => 'delete-router'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'View Role',
            'slug' => 'view-role'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'Create Role',
            'slug' => 'create-role'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'Edit Role',
            'slug' => 'edit-role'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'Delete Role',
            'slug' => 'delete-role'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'View User',
            'slug' => 'view-user'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'Create User',
            'slug' => 'create-user'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'Edit User',
            'slug' => 'edit-user'
        ]);

        factory(App\Permission::class)->create([
            'name' => 'Delete User',
            'slug' => 'delete-user'
        ]);
    }
}
