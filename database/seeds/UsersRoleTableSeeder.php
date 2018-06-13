<?php

use Illuminate\Database\Seeder;
use App\Models\UsersRole;

class UsersRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_role = new UsersRole();
        $users_role->users_role_name = 'Administrator';
        $users_role->users_role_slug = 'admin';
        $users_role->save();

        $users_role = new UsersRole();
        $users_role->users_role_name = 'Manager';
        $users_role->users_role_slug = 'manager';
        $users_role->save();

        $users_role = new UsersRole();
        $users_role->users_role_name = 'User';
        $users_role->users_role_slug = 'user';
        $users_role->save();
    }
}
