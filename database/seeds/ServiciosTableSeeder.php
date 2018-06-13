<?php

use Illuminate\Database\Seeder;
use App\Models\Slider;

class ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slider = new Slider();
        $slider->titulo = 'User';
        $slider->email = 'user@example.com';
        $slider->password = bcrypt('secret');
        $slider->save();
        $slider->roles()->attach($role_user);
        $slider = new User();
        $slider->name = 'Admin';
        $slider->email = 'admin@example.com';
        $slider->password = bcrypt('secret');
        $slider->save();
        $slider->roles()->attach($role_admin);
    }
}
