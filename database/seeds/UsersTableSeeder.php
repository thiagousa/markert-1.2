<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Bruno Martins',
                'email' => 'hello@brunomartins.com',
                'password' => bcrypt(123456),
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Thiago dos Santos',
                'email' => 'thiago@thiagodsantos.com',
                'password' => bcrypt(123456),
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Administrador',
                'email' => 'contact@goianaosupermercado.com',
                'password' => bcrypt(123456),
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
