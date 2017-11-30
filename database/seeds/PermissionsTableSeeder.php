<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'userId'        => 1,
                'pageAdminId'   => 'settings',
                'access'        => 1,
                'add'           => 1,
                'edit'          => 1,
                'delete'        => 1
            ],
            [
                'userId'        => 1,
                'pageAdminId'   => 'profile',
                'access'        => 1,
                'add'           => 1,
                'edit'          => 1,
                'delete'        => 1
            ],
            [
                'userId'        => 1,
                'pageAdminId'   => 'users',
                'access'        => 1,
                'add'           => 1,
                'edit'          => 1,
                'delete'        => 1
            ],
            [
                'userId'        => 2,
                'pageAdminId'   => 'settings',
                'access'        => 1,
                'add'           => 1,
                'edit'          => 1,
                'delete'        => 1
            ],
            [
                'userId'        => 2,
                'pageAdminId'   => 'profile',
                'access'        => 1,
                'add'           => 1,
                'edit'          => 1,
                'delete'        => 1
            ],
            [
                'userId'        => 2,
                'pageAdminId'   => 'users',
                'access'        => 1,
                'add'           => 1,
                'edit'          => 1,
                'delete'        => 1
            ],
            [
                'userId'        => 3,
                'pageAdminId'   => 'settings',
                'access'        => 1,
                'add'           => 1,
                'edit'          => 1,
                'delete'        => 1
            ],
            [
                'userId'        => 3,
                'pageAdminId'   => 'profile',
                'access'        => 1,
                'add'           => 1,
                'edit'          => 1,
                'delete'        => 1
            ],
            [
                'userId'        => 3,
                'pageAdminId'   => 'users',
                'access'        => 1,
                'add'           => 1,
                'edit'          => 1,
                'delete'        => 1
            ]
        ]);
    }
}
