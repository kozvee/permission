<?php

use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'role_id' => 2,
                'permission_id' => 1,
            ],
            [
                'role_id' => 2,
                'permission_id' => 2,
            ],
            [
                'role_id' => 2,
                'permission_id' => 3,
            ],
            [
                'role_id' => 2,
                'permission_id' => 4,
            ],
            [
                'role_id' => 3,
                'permission_id' => 1,
            ],

        ];

        foreach($items as $item) {
            DB::table('permission_role')->insert($item);
        }
    }
}