<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Yajra\Datatables\Datatables;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $sliders = Slider::all();
//        dd($sliders);
        return view('backend.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $slider = new Slider([
            'titulo' => $request['titulo_text'],
            'descripcion' => $request['descripcion'],
//            'content' => $request['content'],
//            'updated_at' => Carbon::now(), //date('Y-m-d G:i:s') DB::raw('NOW()')
//            'created_at' => Carbon::now()  //date('Y-m-d G:i:s') DB::raw('NOW()')
        ]);

        $photoName = $request->imagen->getClientOriginalName();
        $slider->imagen = trim($photoName);
        $slider->imagen = str_replace(' ', '_', $slider->imagen);
        //dd($photoName);
        /*
        talk the select file and move it public directory and make avatars
        folder if doesn't exsit then give it that unique name.
        */
        //dd($path);
        $request->imagen->move(public_path('imagenes/slider'), $slider->imagen);
        $slider->save();
//        return view('backend.slider.create');

//        $img = Image::make('public/foo.jpg')
//
//    // resize image to fixed size
//    // See the docs - http://image.intervention.io/api/resize
//    $img->resize(300, 200);
//
//    // The below part is optional, this is if uploads "belongTo" a "User"
//    // so you automatically insert the relation, if you don't need it, just
//    // remove it.
//    $user->uploads()->create([
//        'original_name' => $name
//    ]);


        return Redirect::to('admin/slider');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }

    public function getData()
    {
        return Datatables::of(Slider::all())->make(true);
    }
}
