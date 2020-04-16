<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatalogoClasificacionProducto;
use Illuminate\Validation\Rule;

class CatalogoProductoController extends Controller
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
            $catalogoProductos = CatalogoClasificacionProducto::where('nombre', 'LIKE', '%' . $buscar . '%')
                            ->orderBy('nombre')->paginate(10);
        } else
        {
            $catalogoProductos = CatalogoClasificacionProducto::orderBy('nombre')->paginate(10);
        }
        return view('Administrador.classification-products', [
            'catalogoProductos' => $catalogoProductos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.create-classification-products');
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
            'nombre' => ['required', 'string', 'max:255', 'unique:catalogoclasificacionproductos'],
        ]);

        $nombreClasificacionProducto = $request->input('nombre');

        $clasificacionProducto = new CatalogoClasificacionProducto();
        $clasificacionProducto->nombre = $nombreClasificacionProducto;

        $clasificacionProducto->save();

        return redirect()->route('admin.productos')
                        ->with(['message' => 'Clasificación agregada']);
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
        $producto = CatalogoClasificacionProducto::find($id);
        return view('Administrador.modify-classification-products', [
            'producto' => $producto
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
            'nombre' => ['required', 'string', 'max:255', Rule::unique('catalogoclasificacionproductos')->ignore($id),],
        ]);

        $nombreClasificacion = $request->input('nombre');

        $producto = CatalogoClasificacionProducto::find($id);
        $producto->nombre = $nombreClasificacion;

        $producto->update();

        return redirect()->route('admin.productos')
                        ->with(['message' => 'Clasificación actualizada']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = CatalogoClasificacionProducto::find($id);
        $producto->delete();
        return redirect()->route('admin.productos')
                        ->with(['message' => 'Clasificación eliminada']);
    }

}
