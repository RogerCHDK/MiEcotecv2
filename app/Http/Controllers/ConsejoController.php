<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Consejo;
use App\CatalogoEntorno;
use App\CatalogoHerramienta;
use App\CatalogoMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
 
class ConsejoController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Usuario.tips');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = Auth::user();
        $entornos = CatalogoEntorno::orderBy('nombre')->get();
        $herramientas = CatalogoHerramienta::orderBy('nombre')->get();
        $materiales = CatalogoMaterial::orderBy('nombre')->get();
        return view('Usuario.create-tip')->with('usuario',$usuario)->with('entornos',$entornos)->with('herramientas',$herramientas)->with('materiales',$materiales);
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
        ]);

        $imagen = $request->file('imagen');
         if ($imagen) { 
            $imagenNombre = time(). $imagen->getClientOriginalName(); 
            $imagenRedimensionada = Image::make($imagen);
            $imagenRedimensionada->resize(800, 533)->save(storage_path('app/eventos/' . $imagenNombre));
            $request->imagen = $imagenNombre;
        }
        $consejo = Consejo::create(
            [
                'id_usuario' => $request->id_usuario,
                'id_entorno' => $request->id_entorno,
                'nombre'=> $request->nombre,
                'imagen'=> $request->imagen,
                'descripcion'=> $request->descripcion
            ]
        );
        $id_consejo = $consejo->id;
        $a_materiales =$request->input('material');
        foreach($a_materiales as $a_material)  {
            $material = Consejo::create(
            [
                'id_usuario' => $request->id_usuario,
                'id_entorno' => $request->id_entorno,
                'nombre'=> $request->nombre,
                'imagen'=> $request->imagen,
                'descripcion'=> $request->descripcion
            ]
        );
        }
        return redirect('/consejo');
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
    //Obtener imagen del consejo
    public function getImage($fileName)
    {
        $file = Storage::disk('consejo')->get($fileName);
        return new Response($file, 200);
    }
}
