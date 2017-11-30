<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PagesAdminTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);

        // BANK SQL
//        $path = 'database/sql/banks.sql';
//        DB::unprepared(file_get_contents($path));
//        $this->command->info('Banks database seeded!');
    }
}
