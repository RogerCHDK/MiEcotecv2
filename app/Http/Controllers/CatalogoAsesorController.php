<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatalogoClasificacionAsesor;
use Illuminate\Validation\Rule;

class CatalogoAsesorController extends Controller
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
            $catalogoAsesores = CatalogoClasificacionAsesor::where('nombre', 'LIKE', '%' . $buscar . '%')
                            ->orderBy('nombre')->paginate(10);
        } else
        {
            $catalogoAsesores = CatalogoClasificacionAsesor::orderBy('nombre')->paginate(10);
        }
        return view('Administrador.classification-adviser', [
            'catalogoAsesores' => $catalogoAsesores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.create-classification-advisers');
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
            'nombre' => ['required', 'string', 'max:255', 'unique:catalogoclasificacionasesores'],
        ]);

        $nombreClasificacionAsesor = $request->input('nombre');

        $clasificacionAsesor = new CatalogoClasificacionAsesor();
        $clasificacionAsesor->nombre = $nombreClasificacionAsesor;

        $clasificacionAsesor->save();

        return redirect()->route('admin.asesores')
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
        $asesor = CatalogoClasificacionAsesor::find($id);
        return view('Administrador.modify-classification-advisers', [
            'asesor' => $asesor
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
            'nombre' => ['required', 'string', 'max:255', Rule::unique('catalogoclasificacionasesores')->ignore($id),],
        ]);

        $nombreClasificacion = $request->input('nombre');

        $entorno = CatalogoClasificacionAsesor::find($id);
        $entorno->nombre = $nombreClasificacion;

        $entorno->update();

        return redirect()->route('admin.asesores')
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
        $asesor = CatalogoClasificacionAsesor::find($id);
        $asesor->delete();
        return redirect()->route('admin.asesores')
                        ->with(['message' => 'Clasificación eliminada']);
    }

}
