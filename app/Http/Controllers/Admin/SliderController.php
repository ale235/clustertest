<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('orden','asc')->paginate(10);
//        dd($sliders);
        return view('backend.slider.index', ['sliders' => $sliders]);
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
        $slider = new Slider([
            'titulo' => $request['titulo_text'],
            'descripcion' => $request['descripcion'],
            'subtitulo' => $request['subtitulo_uno'],
            'orden' => (Slider::all()->count() + 1),
            'estado' => 1,
        ]);

        //Código referido a las imagenes
        $photoName = $request->imagen->getClientOriginalName();
        $slider->imagen = trim($photoName);
        $slider->imagen = str_replace(' ', '_', $slider->imagen);
        $request->imagen->move(public_path('imagenes/slider'), $slider->imagen);
        //Fin código referido a las imágenes

        //Código referido al Orden
//        $cantidadDeSliders = Slider::all()->count();
//        $slider->
        //Fin código referido al Orden

        $slider->save();


        return Redirect::to('admin/slider');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slider::findOrFail($id);
        return view('backend.slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
//        dd($post);
        return view('backend.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try
        {
            DB::beginTransaction();

            $slider = Slider::findOrFail($id);
            $slider->titulo = $request->get('titulo_text');
            $slider->subtitulo = $request->get('subtitulo_uno');
            $slider->descripcion = $request->get('descripcion');

            if($request->imagen!= null)
            {
                $photoName = $request->imagen->getClientOriginalName();
                $slider->imagen = trim($photoName);
                $slider->imagen = str_replace(' ', '_', $slider->imagen);
                $request->imagen->move(public_path('imagenes/slider'), $slider->imagen);
            }
            $slider->update();
            DB::commit();
        }
        catch(\Exception $e)
        {
            DB::rollback();
        }
        return Redirect::to('admin/slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return Redirect::to('admin/slider');

    }

    public function getData()
    {
        $sliders = Slider::all();

        return $this->datatables($sliders)
            ->addColumn('action', function ($proveedor){
                return '<a href="proveedor/' . $proveedor->id .'" class="btn btn-xs btn-primary edit" id="'.$proveedor->id.'"><i class=""></i> Ver</a><a href="proveedor/' . $proveedor->id . '/edit" class="btn btn-xs btn-primary edit" id="'.$proveedor->id.'"><i class=""></i> Editar</a><a href="" data-toggle="modal" data-target="#myModal" class="btn btn-xs btn-primary" id="'.$proveedor->id.'"><i class=""></i> Borrar</a>';
            })
            ->make(true);
        //return Datatables::of(Slider::all())->make(true);
    }

    public function ordenar(Request $request)
    {
        $slider = Slider::find($request->id);
        $slider->orden = $request->orden;
        $slider->update();
//        $data = $request->all(); // This will get all the request data.
//        var_dump($data);
//        dd($data); // This will dump and die
    }
    public function cambiarEstado(Request $request)
    {
        $slider = Slider::find($request->id);
        $slider->estado = $request->estado;
        $slider->update();
//        $data = $request->all(); // This will get all the request data.
//        var_dump($data);
//        dd($data); // This will dump and die
    }
}
