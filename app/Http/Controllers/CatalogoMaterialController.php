<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatalogoMaterial;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Intervention\Image\ImageManagerStatic as Image;

class CatalogoMaterialController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($buscar = null)
    {
        if (!empty($buscar))
        {
            $catalogoMateriales = CatalogoMaterial::where('nombre', 'LIKE', '%' . $buscar . '%')
                            ->orderBy('id')->paginate(10);
        } else
        {
            $catalogoMateriales = CatalogoMaterial::orderBy('nombre')->paginate(10);
        }
        return view('Administrador.materials', [
            'catalogoMateriales' => $catalogoMateriales
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.create-material');
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
            'nombre' => ['required', 'string', 'max:255', 'unique:catalogomateriales'],
            'imagen' => ['required', 'image'],
        ]);

        $nombreMaterial = $request->input('nombre');
        $imagen = $request->file('imagen');

        $material = new CatalogoMaterial();
        $material->nombre = $nombreMaterial;

        if ($imagen)
        {
            $imagenNombre = time() . $imagen->getClientOriginalName();
            $imagenRedimensionada = Image::make($imagen);
            $imagenRedimensionada->resize(800, 533)->save(storage_path('app/materiales/' . $imagenNombre));
//            Storage::disk('materiales')->put($imagenNombre, File::get($imagen));
            $material->imagen = $imagenNombre;
        }

        $material->save();

        return redirect()->route('admin.materiales')
                        ->with(['message' => 'Material agregado']);
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
        $material = CatalogoMaterial::find($id);
        return view('Administrador.modify-material', [
            'material' => $material
        ]);
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
            'nombre' => ['required', 'string', 'max:255', Rule::unique('catalogomateriales')->ignore($id),],
            'imagen' => ['image'],
        ]); 

        $nombreMaterial = $request->input('nombre');
        $imagen = $request->file('imagen');

        $material = CatalogoMaterial::find($id);
        $material->nombre = $nombreMaterial;

        if ($imagen)
        {
            $imagenNombre = time() . $imagen->getClientOriginalName();
            $imagenRedimensionada = Image::make($imagen);
            $imagenRedimensionada->resize(800, 533)->save(storage_path('app/materiales/' . $imagenNombre));
//            Storage::disk('materiales')->put($imagenNombre, File::get($imagen));
            Storage::disk('materiales')->delete($material->imagen);
            $material->imagen = $imagenNombre;
        }

        $material->update();

        return redirect()->route('admin.materiales')
                        ->with(['message' => 'Material actualizado']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = CatalogoMaterial::find($id);
        Storage::disk('materiales')->delete($material->imagen);
        $material->delete();
        return redirect()->route('admin.materiales')
                        ->with(['message' => 'Material eliminado']);
    }

    //Obtener imagen del material
    public function getImage($fileName)
    {
        $file = Storage::disk('materiales')->get($fileName);
        return new Response($file, 200);
    }

    public function publicidad(){ 
        return view('Usuario.publicity-material'); 
    }

    public function crear_publicidad(){ 

        return view('Usuario.publicity-material'); 
    }

}
