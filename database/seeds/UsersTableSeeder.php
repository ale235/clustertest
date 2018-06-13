<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UsersStatus;
use App\Models\UsersRole;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = UsersRole::where('users_role_name', 'Administrator')->first();
        $status_user = UsersStatus::where('users_status_name', 'Active')->first();
        $user = new User();
        $user->username = 'Alejandro Colautti';
        $user->email = 'alejandrocolautti235@hotmail.com';
        $user->phone = '4566351';
        $user->password = bcrypt('a4566351');
        $user->remember_token = str_random(10);
        $user->users_status_id = $status_user->id;
        $user->users_role_id = $role_user->id;
        $user->save();
    }
}
