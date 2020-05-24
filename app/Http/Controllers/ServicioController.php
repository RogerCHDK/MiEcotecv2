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

    public function __construct()
    {
        $this->middleware('auth',['except'=> ['index_no_registrado','show','getImage']]);
    }

    public function index()
    {
        $usuario = Auth::user();
        $clasificacion = CatalogoClasificacionServicio::all();
        $servicio = Servicio::all();
        $mis_servicios = Servicio::where('id_usuario',$usuario->id)->get();
        return view('Usuario.services')->with("clasificaciones",$clasificacion)->with("servicios",$servicio)->with("mis_servicios",$mis_servicios); 
    }

     public function index_no_registrado()
    {
        $clasificacion = CatalogoClasificacionServicio::all();
        $servicio = Servicio::all();
        return view('Usuario_no_registrado.services')->with("clasificaciones",$clasificacion)->with("servicios",$servicio); 
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
        $validate = $this->validate($request, [
            'imagen' => ['required', 'image'],
            'nombre_establecimiento' => ['required','String', 'max:255'],
            'descripcion' => ['required','String', 'max:255'],
            'url' => ['required','String', 'max:255'],
            'telefono' => ['required','Integer'],
            'estado'=> ['required','String', 'max:255'],
            'municipio'=> ['required','String', 'max:255'],
            'colonia'=>['required','String', 'max:255'],
            'calle'=> ['required','String', 'max:255'],
        ]);

        $date = Carbon::now();   
//        $date= $date->addMonths(1);
        $pago = Pago::create(
            [
                'id_usuario' => $request->id_usuario,
                'fechaSolicitud' => $date,
                'fechaAprobacion' => null,
                'estado_pago' => null,
                'vigencia' => null,
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

        return redirect()->route('usuario.publicidad')->with(['message' => 'Publicidad del servicio solicitada, en los próximos días se validará el pago. '
                            . 'Número de solicitud: ' . $pago->id]);; 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = Servicio::findOrFail($id); 
        return view("Usuario.service",compact("servicio"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $elemento = Servicio::findOrFail($id);
        $servicio = CatalogoClasificacionServicio::all(); 
        return view('Usuario.edit-service')->with('servicios',$servicio)->with('elemento',$elemento);
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
        $validate = $this->validate($request, [
            'nombre_establecimiento' => ['required','String', 'max:255'],
            'descripcion' => ['required','String', 'max:255'],
            'url' => ['required','String', 'max:255'],
            'telefono' => ['required','Integer'],
            'estado'=> ['required','String', 'max:255'],
            'municipio'=> ['required','String', 'max:255'],
            'colonia'=>['required','String', 'max:255'],
            'calle'=> ['required','String', 'max:255'],
        ]);

        $servicio = Servicio::findOrFail($id);
        $servicio->id_clasificacionServicio = $request->id_clasificacionServicio;
        $servicio->nombre_establecimiento = $request->nombre_establecimiento;
        $servicio->estado = $request->estado;
        $servicio->municipio = $request->municipio;
        $servicio->colonia = $request->colonia;
        $servicio->calle = $request->calle;
        $servicio->descripcion = $request->descripcion;
        $servicio->url = $request->url;
        $servicio->telefono = $request->telefono;

        $imagen = $request->file('imagen');
         if ($imagen) { 
            $imagenNombre = time(). $imagen->getClientOriginalName(); 
            $imagenRedimensionada = Image::make($imagen);
            $imagenRedimensionada->resize(800, 533)->save(storage_path('app/servicios/' . $imagenNombre));
            Storage::disk('servicios')->delete($servicio->imagen);
            $servicio->imagen = $imagenNombre;
        }

        $servicio->update();
        return redirect()->route('servicios.index')
                        ->with(['message' => 'Servicio actualizado']);
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
