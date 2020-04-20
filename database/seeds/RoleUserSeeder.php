<?php

use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
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
                'role_id' => 1,
                'user_id' => 1,
                'created_at' => NOW(),
                'updated_at' => NOW()

            ],
            [
                'role_id' => 2,
                'user_id' => 1,
                'created_at' => NOW(),
                'updated_at' => NOW()

            ],
            [
                'role_id' => 1,
                'user_id' => 2,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'role_id' => 2,
                'user_id' => 3,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'role_id' => 2,
                'user_id' => 4,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'role_id' => 3,
                'user_id' => 5,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'role_id' => 3,
                'user_id' => 6,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'role_id' => 4,
                'user_id' => 7,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'role_id' => 5,
                'user_id' => 8,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],

        ];

        foreach($items as $item) {
            DB::table('role_user')->insert($item);
        }
    }
}
