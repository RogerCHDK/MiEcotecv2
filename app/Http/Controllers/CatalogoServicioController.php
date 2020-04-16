<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatalogoClasificacionServicio;
use Illuminate\Validation\Rule;

class CatalogoServicioController extends Controller
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
            $catalogoServicios = CatalogoClasificacionServicio::where('nombre', 'LIKE', '%' . $buscar . '%')
                            ->orderBy('nombre')->paginate(10);
        } else
        {
            $catalogoServicios = CatalogoClasificacionServicio::orderBy('nombre')->paginate(10);
        }
        return view('Administrador.classification-services', [
            'catalogoServicios' => $catalogoServicios
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.create-classification-services');
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
            'nombre' => ['required', 'string', 'max:255', 'unique:catalogoclasificacionservicios'],
        ]);

        $nombreClasificacionServicio = $request->input('nombre');

        $clasificacionServicio = new CatalogoClasificacionServicio();
        $clasificacionServicio->nombre = $nombreClasificacionServicio;

        $clasificacionServicio->save();

        return redirect()->route('admin.servicios')
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
        $servicio = CatalogoClasificacionServicio::find($id);
        return view('Administrador.modify-classification-services', [
            'servicio' => $servicio
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
            'nombre' => ['required', 'string', 'max:255', Rule::unique('catalogoclasificacionservicios')->ignore($id),],
        ]);

        $nombreClasificacion = $request->input('nombre');

        $servicio = CatalogoClasificacionServicio::find($id);
        $servicio->nombre = $nombreClasificacion;

        $servicio->update();

        return redirect()->route('admin.servicios')
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
        $servicio = CatalogoClasificacionServicio::find($id);
        $servicio->delete();
        return redirect()->route('admin.servicios')
                        ->with(['message' => 'Clasificación eliminada']);
    }

}
