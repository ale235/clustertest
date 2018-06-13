<?php

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slider = new Slider();
        $slider->titulo = 'Lorem ipsum dolor sit amet consectetur adipiscing elit';
        $slider->subtitulo = 'non ac, consequat ullamcorper curabitur pulvinar aptent dictumst taciti cubilia pretium, ultrices eleifend ';
        $slider->descripcion = 'Lorem ipsum dolor sit amet consectetur adipiscing elit non ac, consequat ullamcorper curabitur pulvinar aptent dictumst taciti cubilia pretium, ultrices eleifend eu platea sagittis tristique luctus libero. Tristique aliquam interdum neque nam torquent sollicitudin curabitur litora blandit dapibus gravida, et maecenas hendrerit facilisis sociosqu proin vitae ultrices convallis pharetra sodales augue, auctor justo pulvinar habitasse pretium eu iaculis erat taciti tempor. Vulputate nascetur tempus blandit curae tristique, praesent pellentesque nisi class quisque varius, cursus tempor imperdiet placerat.';
        $slider->imagen = 'seed1.jpg';
        $slider->orden = 1;
        $slider->estado = 1;
        $slider->save();

        $slider = new Slider();
        $slider->titulo = 'Lorem ipsum dolor sit amet consectetur adipiscing elit';
        $slider->subtitulo = 'non ac, consequat ullamcorper curabitur pulvinar aptent dictumst taciti cubilia pretium, ultrices eleifend ';
        $slider->descripcion = 'Lorem ipsum dolor sit amet consectetur adipiscing elit non ac, consequat ullamcorper curabitur pulvinar aptent dictumst taciti cubilia pretium, ultrices eleifend eu platea sagittis tristique luctus libero. Tristique aliquam interdum neque nam torquent sollicitudin curabitur litora blandit dapibus gravida, et maecenas hendrerit facilisis sociosqu proin vitae ultrices convallis pharetra sodales augue, auctor justo pulvinar habitasse pretium eu iaculis erat taciti tempor. Vulputate nascetur tempus blandit curae tristique, praesent pellentesque nisi class quisque varius, cursus tempor imperdiet placerat.';
        $slider->imagen = 'seed2.jpg';
        $slider->orden = 2;
        $slider->estado = 1;
        $slider->save();
    }
}
