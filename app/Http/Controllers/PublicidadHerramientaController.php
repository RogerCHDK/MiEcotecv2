<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatalogoHerramienta;
use App\PublicidadHerramienta;
use App\Pago;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

class PublicidadHerramientaController extends Controller
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
        return view('Usuario.publicity');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalogoHerramientas = CatalogoHerramienta::orderBy('nombre')->get();
        return view('Usuario.publicity-tool', [
            'catalogoHerramientas' => $catalogoHerramientas
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

        $tipoHerramienta = $request->input('tipoHerramienta');
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

        $publicidadHerramienta = new PublicidadHerramienta();
        $publicidadHerramienta->enlace = $enlace;
        $publicidadHerramienta->id_usuario = $idUsuario;
        $publicidadHerramienta->id_pago = $pago->id;
        $publicidadHerramienta->id_herramienta = intval($tipoHerramienta);

        if ($imagen)
        {
            $imagenNombre = time() . $imagen->getClientOriginalName();
            $imagenRedimensionada = Image::make($imagen);
            $imagenRedimensionada->resize(800, 533)->save(storage_path('app/publicidadHerramienta/' . $imagenNombre));
            $publicidadHerramienta->imagen = $imagenNombre;
        }

        $publicidadHerramienta->save();

        return redirect()->route('usuario.publicidad')
                        ->with(['message' => 'Publicidad de la herramienta solicitada, en los próximos días se validará el pago. '
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
