<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatalogoHerramienta;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Intervention\Image\ImageManagerStatic as Image;

class CatalogoHerramientaController extends Controller
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
            $catalogoHerramientas = CatalogoHerramienta::where('nombre', 'LIKE', '%' . $buscar . '%')
                            ->orderBy('nombre')->paginate(10);
        } else
        {
            $catalogoHerramientas = CatalogoHerramienta::orderBy('nombre')->paginate(10);
        }
        return view('Administrador.tools', [
            'catalogoHerramientas' => $catalogoHerramientas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.create-tool');
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
            'nombre' => ['required', 'string', 'max:255', 'unique:catalogoherramientas'],
            'imagen' => ['required', 'image'],
        ]);

        $nombreHerramienta = $request->input('nombre');
        $imagen = $request->file('imagen');

        $herramienta = new CatalogoHerramienta();
        $herramienta->nombre = $nombreHerramienta;

        if ($imagen)
        {
            $imagenNombre = time() . $imagen->getClientOriginalName();
            $imagenRedimensionada = Image::make($imagen);
            $imagenRedimensionada->resize(800, 533)->save(storage_path('app/herramientas/' . $imagenNombre));
//            Storage::disk('herramientas')->put($imagenNombre, File::get($imagen));
            $herramienta->imagen = $imagenNombre;
        }

        $herramienta->save();

        return redirect()->route('admin.herramientas')
                        ->with(['message' => 'Herramienta agregada']);
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
        $herramienta = CatalogoHerramienta::find($id);
        return view('Administrador.modify-tool', [
            'herramienta' => $herramienta
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
            'nombre' => ['required', 'string', 'max:255', Rule::unique('catalogoherramientas')->ignore($id),],
            'imagen' => ['image'],
        ]);

        $nombreHerramienta = $request->input('nombre');
        $imagen = $request->file('imagen');

        $herramienta = CatalogoHerramienta::find($id);
        $herramienta->nombre = $nombreHerramienta;

        if ($imagen)
        {
            $imagenNombre = time() . $imagen->getClientOriginalName();
            $imagenRedimensionada = Image::make($imagen);
            $imagenRedimensionada->resize(800, 533)->save(storage_path('app/herramientas/' . $imagenNombre));
//            Storage::disk('herramientas')->put($imagenNombre, File::get($imagen));
            Storage::disk('herramientas')->delete($herramienta->imagen);
            $herramienta->imagen = $imagenNombre;
        }

        $herramienta->update();

        return redirect()->route('admin.herramientas')
                        ->with(['message' => 'Herramienta actualizada']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $herramienta = CatalogoHerramienta::find($id);
        Storage::disk('herramientas')->delete($herramienta->imagen);
        $herramienta->delete();
        return redirect()->route('admin.herramientas')
                        ->with(['message' => 'Herramienta eliminada']);
    }

    //Obtener imagen de la herramienta
    public function getImage($fileName)
    {
        $file = Storage::disk('herramientas')->get($fileName);
        return new Response($file, 200);
    }

}
