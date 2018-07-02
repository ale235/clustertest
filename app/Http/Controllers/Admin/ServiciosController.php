<?php

namespace App\Http\Controllers\Admin;

use App\Models\Servicios;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicios::orderBy('orden','asc')->paginate(10);
//        dd($sliders);
        return view('backend.servicios.index', ['servicios' => $servicios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request['descripcion']);
        $servicio = new Servicios([
            'titulo' => $request['titulo_text'],
            'descripcion' => $request['descripcion'],
            'orden' => (Servicios::all()->count() + 1),
            'estado' => 1,
        ]);

        //Código referido a las imagenes
        $photoName = $request->icono->getClientOriginalName();
        $servicio->icono = trim($photoName);
        $servicio->icono = str_replace(' ', '_', $servicio->icono);
        $request->icono->move(public_path('imagenes/servicios'), $servicio->icono);
        //Fin código referido a las imágenes

        //Código referido al Orden
//        $cantidadDeSliders = Slider::all()->count();
//        $slider->
        //Fin código referido al Orden

        $servicio->save();


        return Redirect::to('admin/servicios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function show(Servicios $servicios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = Servicios::findOrFail($id);
//        dd($post);
        return view('backend.servicios.edit', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try
        {
            DB::beginTransaction();

            $servicio = Servicios::findOrFail($id);
            $servicio->titulo = $request->get('titulo_text');
            $servicio->descripcion = $request->get('descripcion');

            if($request->icono!= null)
            {
                $photoName = $request->icono->getClientOriginalName();
                $servicio->icono = trim($photoName);
                $servicio->icono = str_replace(' ', '_', $servicio->icono);
                $request->imagen->move(public_path('imagenes/servicios'), $servicio->icono);
            }
            $servicio->update();
            DB::commit();
        }
        catch(\Exception $e)
        {
            DB::rollback();
        }
        return Redirect::to('admin/servicios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicios $servicios)
    {
        //
    }

    public function ordenarServicios(Request $request)
    {
        $servicios = Servicios::find($request->id);
        $servicios->orden = $request->orden;
        $servicios->update();
//        $data = $request->all(); // This will get all the request data.
//        var_dump($data);
//        dd($data); // This will dump and die
    }
    public function cambiarEstadoServicios(Request $request)
    {
        $servicios = Servicios::find($request->id);
        $servicios->estado = $request->estado;
        $servicios->update();
//        $data = $request->all(); // This will get all the request data.
//        var_dump($data);
//        dd($data); // This will dump and die
    }
}
