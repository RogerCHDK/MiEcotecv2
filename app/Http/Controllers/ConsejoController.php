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
        if (Auth::guest()) {
            
        $consejos = Consejo::orderBy('nombre')->get();
        $entornos = CatalogoEntorno::orderBy('nombre')->get();
        $entornos1=$entornos;
        return view('Usuario_no_registrado.tips')->with('consejos',$consejos)->with('entornos',$entornos)->with('entornos1',$entornos1);
        } else {
         $usuario = Auth::user();
        $misconsejos = Consejo::where('id_usuario',$usuario->id)->get();
        $consejos = Consejo::orderBy('nombre')->get();
        $entornos = CatalogoEntorno::orderBy('nombre')->get();
        $entornos1=$entornos;
        return view('Usuario.tips')->with('consejos',$consejos)->with('misconsejos',$misconsejos)->with('entornos',$entornos)->with('entornos1',$entornos1);   
            
        }
        
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
        return view('Usuario.create-tip')->with('usuario',$usuario)->with('entornos',$entornos)->with('herramientas',$herramientas)->with('materiales',$materiales)->with(['message' => 'Consejo creado']);
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
            $imagenRedimensionada->resize(800, 533)->save(storage_path('app/consejos/' . $imagenNombre));
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
            $imagenRedimensionada->resize(800, 533)->save(storage_path('app/consejos/' . $imagenNombre));
            $request->imagen = $imagenNombre;
        }
        $consejo = Consejo::find($id);
        $a_materiales =$request->input('material');
        $consejo->catalogoMateriales()->sync($a_materiales);
        $a_herramientas = $request->input('herramienta');
        $consejo->catalogoHerramientas()->sync($a_herramientas);

        $imagen_consejo = $request->imagen;
        $id_usu = $request->id_usuario;
        $id_ent = $request->id_entorno;
        $nombre_consejo = $request->nombre;
        $descripcion_consejo = $request->descripcion;

        $consejo->imagen = $imagen_consejo;
        $consejo->id_usuario = $id_usu;
        $consejo->id_entorno = $id_ent;
        $consejo->nombre = $nombre_consejo;
        $consejo->descripcion = $descripcion_consejo;
        $consejo->update();

        return redirect('/consejo')->with(['message' => 'Consejo actualizado']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consejo = Consejo::find($id);
        //Storage::disk('consejo')->delete($consejo->imagen);
        $consejo->delete();
        return redirect('/consejo');
    }
    //Obtener imagen del consejo
    public function getImage($fileName)
    {
        $file = Storage::disk('consejo')->get($fileName);
        return new Response($file, 200);
    }

}
