<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatalogoClasificacionProducto;  
use App\Producto; 
use App\Pago; 
use Illuminate\Support\Facades\Auth;  
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

class ProductoController extends Controller 
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  
    {
        $usuario = Auth::user(); 
        $clasificacion = CatalogoClasificacionProducto::all(); 
        $producto = Producto::all(); 
        $mis_productos = Producto::where('id_usuario',$usuario->id)->get();
        return view('Usuario.products')->with('productos',$producto)->with('clasificaciones',$clasificacion)->with('mis_productos',$mis_productos); 
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
        $producto = CatalogoClasificacionProducto::all(); 
        return view('Usuario.create-product')->with('productos',$producto)->with('usuario',$usuario);
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
            $imagenRedimensionada->resize(800, 533)->save(storage_path('app/productos/' . $imagenNombre));
            $request->imagen = $imagenNombre;
        }
           

        $producto = Producto::create(
            [
                'id_usuario' => $request->id_usuario,
                'id_pago'=> 1,
                'id_clasificacionProducto'=> $request->id_clasificacionProducto,
                'nombre'=> $request->nombre,
                'imagen'=> $request->imagen,
                'descripcion'=> $request->descripcion,
                'precio'=> $request->precio,
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
        $producto = Producto::findOrFail($id);
        return view("Usuario.product",compact("producto"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Usuario.create-product');
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

    //Obtener imagen del producto
    public function getImage($fileName)
    {
        $file = Storage::disk('productos')->get($fileName);
        return new Response($file, 200);
    }
}