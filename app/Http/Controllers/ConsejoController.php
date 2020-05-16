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
        $usuario = Auth::user();
        $misconsejos = Consejo::where('id_usuario',$usuario->id)->get();
        $consejos = Consejo::orderBy('nombre')->get();
        $entornos = CatalogoEntorno::orderBy('nombre')->get();
        return view('Usuario.tips')->with('consejos',$consejos)->with('misconsejos',$misconsejos)->with('entornos',$entornos);
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
        $consejo_material =Consejo::find($id_consejo);
        $a_materiales =$request->input('material');
        foreach($a_materiales as $a_material)  {
            $consejo_material->catalogoMateriales()->attach($a_material);
        }
        $consejo_herramienta = Consejo::find($id_consejo);
        $a_herramientas = $request->input('herramienta');
        foreach($a_herramientas as $a_herramienta)  {
            $consejo_herramienta->catalogoHerramientas()->attach($a_herramienta);
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
        $usuario = Auth::user();
        $consejo = Consejo::find($id);
        
        $user = User::where('id',$consejo->id_usuario)->get();
        
        /*
        foreach ($consejo->catalogoHerramientas as $catalogoHerramienta) {
            $cat_herr = CatalogoHerramienta::find($catalogoHerramienta);
        }
        */
        //$user = User::where('id',$evento->id_usuario)->get();
        //$registros = count(Registro::where('id',$evento->id)->get());
        $cat_mat = $consejo->catalogoMateriales;
        $cat_herr = $consejo->catalogoHerramientas;
        return view('Usuario.tip')->with('consejo', $consejo)->with('cat_mat',$cat_mat)->with('cat_herr',$cat_herr)->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consejo = Consejo::find($id);
        $users = Auth::user();
        $entornos = CatalogoEntorno::orderBy('nombre')->get();
        $herramientas = CatalogoHerramienta::orderBy('nombre')->get();
        $materiales = CatalogoMaterial::orderBy('nombre')->get();

        $user = User::where('id',$consejo->id_usuario)->get();
        
        $ban=false;
        $cat_mat = $consejo->catalogoMateriales;
        $cat_herr = $consejo->catalogoHerramientas;
        return view('Usuario.edit-tip', compact('users'))->with('consejo',$consejo)->with('entornos',$entornos)->with('herramientas',$herramientas)->with('materiales',$materiales)->with('cat_mat',$cat_mat)->with('cat_herr',$cat_herr)->with('ban',$ban);
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
            'imagen' => ['required', 'image'],
        ]);

        $imagen = $request->file('imagen');
         if ($imagen) { 
            $imagenNombre = time(). $imagen->getClientOriginalName(); 
            $imagenRedimensionada = Image::make($imagen);
            $imagenRedimensionada->resize(800, 533)->save(storage_path('app/eventos/' . $imagenNombre));
            $request->imagen = $imagenNombre;
        }
        $evento = Evento::find($id);
        $cat_mat = $consejo->catalogoMateriales;
        $a_materiales =$request->input('material');
        foreach($a_materiales as $a_material)  {
            foreach ($cat_mat as $cat_mat1) {
                # code...
            }
            $consejo_material->catalogoMateriales()->attach($a_material);
        }
        $consejo_herramienta = Consejo::find($id_consejo);
        $a_herramientas = $request->input('herramienta');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
    //Obtener imagen del consejo
    public function getImage($fileName)
    {
        $file = Storage::disk('consejo')->get($fileName);
        return new Response($file, 200);
    }

}
