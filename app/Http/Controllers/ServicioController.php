<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pago; 
use App\Servicio;  
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\CatalogoClasificacionServicio;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = Auth::user();
        $usuario = $usuario->id;
        $servicio = CatalogoClasificacionServicio::all(); 
       return view('Usuario.create-service')->with('servicios',$servicio)->with('usuario',$usuario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = Carbon::now();   
        $date= $date->addMonths(1);
        $pago = Pago::create(
            [
                'id_usuario' => $request->id_usuario, 
                'tiempo'=> 1,
                'estado_pago'=> 0,
                'vigencia'=> $date,
            ]
        ); 

        $imagen = $request->file('imagen');
         if ($imagen) { 
            $imagenNombre = time(). $imagen->getClientOriginalName(); 
            $imagenRedimensionada = Image::make($imagen);
            $imagenRedimensionada->resize(800, 533)->save(storage_path('app/servicios/' . $imagenNombre));
            $request->imagen = $imagenNombre;
        }
     
        $servicio = Servicio::create(
            [
                'id_usuario' => $request->id_usuario,
                'id_pago'=> $pago->id,
                'id_clasificacionServicio'=> $request->id_clasificacionServicio,
                'imagen'=> $request->imagen,
                'nombre_establecimiento'=> $request->nombre_establecimiento,
                'estado'=> $request->estado,
                'municipio'=> $request->municipio,
                'colonia'=> $request->colonia,
                'calle'=> $request->calle,
                'descripcion'=> $request->descripcion,
                'url'=> $request->url,
                'telefono'=> $request->telefono,
            ]
        );

        return redirect()->route('publicidad.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     public function getImage($fileName)
    {
        $file = Storage::disk('servicios')->get($fileName);
        return new Response($file, 200);
    }
}
