<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatalogoEntorno;
use Illuminate\Validation\Rule;

class CatalogoEntornoController extends Controller
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
            $catalogoEntornos = CatalogoEntorno::where('nombre', 'LIKE', '%' . $buscar . '%')
                            ->orderBy('nombre')->paginate(10);
        } else
        {
            $catalogoEntornos = CatalogoEntorno::orderBy('nombre')->paginate(10);
        }
        return view('Administrador.environment', [
            'catalogoEntornos' => $catalogoEntornos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.create-environment');
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
            'nombre' => ['required', 'string', 'max:255', 'unique:catalogoentornos'],
        ]);

        $nombreEntorno = $request->input('nombre');

        $entorno = new CatalogoEntorno();
        $entorno->nombre = $nombreEntorno;

        $entorno->save();

        return redirect()->route('admin.entornos')
                        ->with(['message' => 'Entorno agregado']);
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
        $entorno = CatalogoEntorno::find($id);
        return view('Administrador.modify-environment', [
            'entorno' => $entorno
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
            'nombre' => ['required', 'string', 'max:255', Rule::unique('catalogoentornos')->ignore($id),],
        ]);

        $nombreEntorno = $request->input('nombre');

        $entorno = CatalogoEntorno::find($id);
        $entorno->nombre = $nombreEntorno;

        $entorno->update();

        return redirect()->route('admin.entornos')
                        ->with(['message' => 'Entorno actualizado']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entorno = CatalogoEntorno::find($id);
        $entorno->delete();
        return redirect()->route('admin.entornos')
                        ->with(['message' => 'Entorno eliminado']);
    }

}
