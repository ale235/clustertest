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
        $this->call(UsersRoleTableSeeder::class);
        $this->call(UsersStatusTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
    }
}
