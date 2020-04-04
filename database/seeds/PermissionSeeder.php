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
    }
}
