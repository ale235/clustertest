<?php

use Illuminate\Database\Seeder;
use App\Models\UsersStatus;

class UsersStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_status = new UsersStatus();
        $users_status->users_status_name = 'Active';
        $users_status->save();

        $users_status = new UsersStatus();
        $users_status->users_status_name = 'Disabled';
        $users_status->save();

        $users_status = new UsersStatus();
        $users_status->users_status_name = 'Inactive';
        $users_status->save();
    }
}
