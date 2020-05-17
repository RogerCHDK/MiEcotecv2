<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pago;
use App\Servicio;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\CatalogoClasificacionServicio;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

class ServicioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Auth::user();
        $clasificacion = CatalogoClasificacionServicio::all();
        $servicio = Servicio::all();
        $mis_servicios = Servicio::where('id_usuario', $usuario->id)->get();
        return view('Usuario.services')->with("clasificaciones", $clasificacion)->with("servicios", $servicio)->with("mis_servicios", $mis_servicios);
    }

    public function publicidadPendiente($buscar = null)
    {
        if (!empty($buscar))
        {
            $servicios = Servicio::join('pagos', 'servicios.id_pago', '=', 'pagos.id')
                    ->join('users', 'servicios.id_usuario', '=', 'users.id')
                    ->select('servicios.id_usuario', 'servicios.id_pago', 'servicios.nombre_establecimiento', 'servicios.imagen', 'pagos.fechaSolicitud')
                    ->whereNull('pagos.estado_pago')
                    ->where('servicios.nombre_establecimiento', 'LIKE', '%' . $buscar . '%')
                    ->orwhere('pagos.fechaSolicitud', 'LIKE', '%' . $buscar . '%')
                    ->orwhere('servicios.id_pago', 'LIKE', '%' . $buscar . '%')
                    ->orwhere('users.nombre', 'LIKE', '%' . $buscar . '%')
                    ->orwhere('users.apellido_paterno', 'LIKE', '%' . $buscar . '%')
                    ->orwhere('users.apellido_materno', 'LIKE', '%' . $buscar . '%')
                    ->orderByDesc('fechaSolicitud')
                    ->paginate(10);
        } else
        {
            $servicios = Servicio::join('pagos', 'servicios.id_pago', '=', 'pagos.id')
                    ->select('servicios.id_usuario', 'servicios.id_pago', 'servicios.nombre_establecimiento', 'servicios.imagen', 'pagos.fechaSolicitud')
                    ->whereNull('pagos.estado_pago')
                    ->orderByDesc('fechaSolicitud')
                    ->paginate(10);
        }

        return view('Administrador.publicity-pending-service', [
            'servicios' => $servicios
        ]);
    }

    public function activarPublicidad($id_pago)
    {
        $date = Carbon::now();
        $vigencia = Carbon::now()->addMonth();

        $pago = Pago::find($id_pago);
        $pago->fechaAprobacion = $date;
        $pago->estado_pago = 1;
        $pago->vigencia = $vigencia;
        $pago->update();

        return redirect()->route('admin.publicidad-pendiente-servicio')
                        ->with(['message' => 'Publicidad del servicio activada']);
    }

    public function removerPublicidad($id_pago)
    {
        $pago = Pago::find($id_pago);
        $pago->estado_pago = 0;
        $pago->update();

        return redirect()->route('admin.publicidad-pendiente-servicio')
                        ->with(['message' => 'Publicidad del servicio eliminada']);
    }

    public function publicidadActiva()
    {
        return view('Administrador.publicity-active-service');
    }

    public function publicidadEliminada()
    {
        return view('Administrador.publicity-removed-service');
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
        $servicio = CatalogoClasificacionServicio::all();
        return view('Usuario.create-service')->with('servicios', $servicio)->with('usuario', $usuario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = Carbon::now();
        $pago = Pago::create(
                        [
                            'id_usuario' => $request->id_usuario,
                            'fechaSolicitud' => $date,
                            'estado_pago' => null,
                            'vigencia' => null,
                        ]
        );

        $imagen = $request->file('imagen');
        if ($imagen)
        {
            $imagenNombre = time() . $imagen->getClientOriginalName();
            $imagenRedimensionada = Image::make($imagen);
            $imagenRedimensionada->resize(800, 533)->save(storage_path('app/servicios/' . $imagenNombre));
            $request->imagen = $imagenNombre;
        }

        $servicio = Servicio::create(
                        [
                            'id_usuario' => $request->id_usuario,
                            'id_pago' => $pago->id,
                            'id_clasificacionServicio' => $request->id_clasificacionServicio,
                            'imagen' => $request->imagen,
                            'nombre_establecimiento' => $request->nombre_establecimiento,
                            'estado' => $request->estado,
                            'municipio' => $request->municipio,
                            'colonia' => $request->colonia,
                            'calle' => $request->calle,
                            'descripcion' => $request->descripcion,
                            'url' => $request->url,
                            'telefono' => $request->telefono,
                        ]
        );

        return redirect()->route('usuario.publicidad');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = Servicio::findOrFail($id);
        return view("Usuario.service", compact("servicio"));
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

    public function getImage($fileName)
    {
        $file = Storage::disk('servicios')->get($fileName);
        return new Response($file, 200);
    }

}
