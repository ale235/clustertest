<?php

namespace App\Http\Controllers\Admin;

use App\Models\OurWorks;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class OurWorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourWorks = OurWorks::orderBy('orden','asc')->paginate(10);
//        dd($sliders);
        return view('backend.ourworks.index', ['ourWorks' => $ourWorks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ourworks.create');
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
        $ourwork = new OurWorks([
            'titulo_principal' => $request['titulo_principal'],
            'descripcion_principal' => $request['descripcion_principal'],
            'titulo_blog' => $request['titulo_blog'],
            'ubicacion' => $request['ubicacion'],
            'cubiertos' => $request['cubiertos'],
            'semicubiertos' => $request['semicubiertos'],
            'ano' => $request['ano'],
            'etapa' => $request['etapa'],
            'memoria' => $request['memoria'],
            'orden' => (OurWorks::all()->count() + 1),
            'estado' => 1,
        ]);

        $photoName = $request->imagen_principal->getClientOriginalName();
        $ourwork->imagen_principal = trim($photoName);
        $ourwork->imagen_principal = str_replace(' ', '_', $ourwork->imagen_principal);
        $request->imagen_principal->move(public_path('imagenes/ourworks/principal'), $ourwork->imagen_principal);


        $files = $request->file('imagen_trabajos');
//        dd($request);
        if($request->hasFile('imagen'))
        {
            $alg= 0;
            foreach ($files as $file) {
                $alg = $alg +1;
                $photoName = $file->imagen_principal->getClientOriginalName();
                $ourwork_imagen = DB::table('our_works_imagen as owi');
                $ourwork->imagen_principal = trim($photoName);
                $ourwork->imagen_principal = str_replace(' ', '_', $ourwork->imagen_principal);
                $request->imagen_principal->move(public_path('imagenes/ourworks/principal'), $ourwork->imagen_principal);
            }
        }
        dd($alg);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OurWorks  $ourWorks
     * @return \Illuminate\Http\Response
     */
    public function show(OurWorks $ourWorks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OurWorks  $ourWorks
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ourWork = OurWorks::findOrFail($id);
//        dd($post);
        return view('backend.ourworks.edit', compact('ourWork'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OurWorks  $ourWorks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurWorks $ourWorks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OurWorks  $ourWorks
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurWorks $ourWorks)
    {
        //
    }

    public function ordenarOurWorks(Request $request)
    {
        $ourWork = OurWorks::find($request->id);
        $ourWork->orden = $request->orden;
        $ourWork->update();
//        $data = $request->all(); // This will get all the request data.
//        var_dump($data);
//        dd($data); // This will dump and die
    }
    public function cambiarEstadoOurWorks(Request $request)
    {
        $ourWork = OurWorks::find($request->id);
        $ourWork->estado = $request->estado;
        $ourWork->update();
//        $data = $request->all(); // This will get all the request data.
//        var_dump($data);
//        dd($data); // This will dump and die
    }
}
