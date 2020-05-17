<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatalogoHerramienta;
use App\PublicidadHerramienta;
use App\Pago;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

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

    public function indexAdministrator()
    {
        return view('Administrador.index');
    }

    public function indexPendiente()
    {
        return view('Administrador.publicity-pending');
    }

    public function indexActiva()
    {
        return view('Administrador.publicity-active');
    }

    public function indexEliminada()
    {
        return view('Administrador.publicity-removed');
    }

    public function publicidadPendiente($buscar = null)
    {
        if (!empty($buscar))
        {
            $publicidadHerramienta = PublicidadHerramienta::join('pagos', 'publicidadherramienta.id_pago', '=', 'pagos.id')
                    ->join('users', 'publicidadherramienta.id_usuario', '=', 'users.id')
                    ->select('publicidadherramienta.id_usuario', 'publicidadherramienta.id_pago', 'publicidadherramienta.imagen', 'pagos.fechaSolicitud')
                    ->whereNull('pagos.estado_pago')
                    ->where('pagos.fechaSolicitud', 'LIKE', '%' . $buscar . '%')
                    ->orwhere('publicidadherramienta.id_pago', 'LIKE', '%' . $buscar . '%')
                    ->orwhere('users.nombre', 'LIKE', '%' . $buscar . '%')
                    ->orwhere('users.apellido_paterno', 'LIKE', '%' . $buscar . '%')
                    ->orwhere('users.apellido_materno', 'LIKE', '%' . $buscar . '%')
                    ->orderByDesc('fechaSolicitud')
                    ->paginate(10);
        } else
        {
            $publicidadHerramienta = PublicidadHerramienta::join('pagos', 'publicidadherramienta.id_pago', '=', 'pagos.id')
                    ->select('publicidadherramienta.id_usuario', 'publicidadherramienta.id_pago', 'publicidadherramienta.imagen', 'pagos.fechaSolicitud')
                    ->whereNull('pagos.estado_pago')
                    ->orderByDesc('fechaSolicitud')
                    ->paginate(10);
        }

        return view('Administrador.publicity-pending-tool', [
            'publicidadHerramienta' => $publicidadHerramienta
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

        return redirect()->route('admin.publicidad-pendiente-herramienta')
                        ->with(['message' => 'Publicidad de la herramienta activada']);
    }

    public function removerPublicidad($id_pago)
    {
        $pago = Pago::find($id_pago);
        $pago->estado_pago = 0;
        $pago->update();

        return redirect()->route('admin.publicidad-pendiente-herramienta')
                        ->with(['message' => 'Publicidad de la herramienta eliminada']);
    }

    public function publicidadActiva()
    {
        return view('Administrador.publicity-active-tool');
    }

    public function publicidadEliminada()
    {
        return view('Administrador.publicity-removed-tool');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalogoHerramientas = CatalogoHerramienta::leftJoin('publicidadherramienta', 'catalogoherramientas.id', '=', 'publicidadherramienta.id_herramienta')
                ->select('catalogoherramientas.id', 'catalogoherramientas.nombre')
                ->whereNull('publicidadherramienta.id_herramienta')
                ->get();
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

    public function getImage($fileName)
    {
        $file = Storage::disk('publicidadHerramienta')->get($fileName);
        return new Response($file, 200);
    }

}
