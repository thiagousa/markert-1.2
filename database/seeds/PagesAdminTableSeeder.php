<?php

use Illuminate\Database\Seeder;

class PagesAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pagesAdmin')->insert([
            [
                'pagesAdminId'  => 'settings',
                'title'         => 'Settings',
                'icon'          => 'si si-settings',
                'sortorder'     => 5
            ],
            [
                'pagesAdminId'  => 'profile',
                'title'         => 'Profile',
                'icon'          => 'si si-key',
                'sortorder'     => 6
            ],
            [
                'pagesAdminId'  => 'users',
                'title'         => 'Users',
                'icon'          => 'si si-users',
                'sortorder'     => 7
            ]
        ]);
    }
}
