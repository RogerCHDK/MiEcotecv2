<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatalogoMaterial;
use App\PublicidadMaterial;
use App\Pago;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

class PublicidadMaterialController extends Controller
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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalogoMateriales = CatalogoMaterial::orderBy('nombre')->get();
        return view('Usuario.publicity-material', [
            'catalogoMateriales' => $catalogoMateriales
        ]);
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
            'enlace' => ['String', 'max:255'],
        ]);

        $tipoMaterial = $request->input('tipoMaterial');
        $idUsuario = \Auth::user()->id;
        $enlace = $request->input('enlace');
        $imagen = $request->file('imagen');
        $date = Carbon::now();

        $pago = new Pago();
        $pago->id_usuario = $idUsuario;
        $pago->fechaSolicitud = $date;
        $pago->fechaAprobacion = null;
        $pago->estado_pago = null;
        $pago->vigencia = null;
        $pago->save();

        $publicidadMaterial = new PublicidadMaterial();
        $publicidadMaterial->enlace = $enlace;
        $publicidadMaterial->id_usuario = $idUsuario;
        $publicidadMaterial->id_pago = $pago->id;
        $publicidadMaterial->id_material = intval($tipoMaterial);

        if ($imagen)
        {
            $imagenNombre = time() . $imagen->getClientOriginalName();
            $imagenRedimensionada = Image::make($imagen);
            $imagenRedimensionada->resize(800, 533)->save(storage_path('app/publicidadMaterial/' . $imagenNombre));
            $publicidadMaterial->imagen = $imagenNombre;
        }

        $publicidadMaterial->save();

        return redirect()->route('usuario.publicidad')
                        ->with(['message' => 'Publicidad del material solicitada, en los próximos días se validará el pago. '
                            . 'Número de solicitud: ' . $pago->id]);
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

}
