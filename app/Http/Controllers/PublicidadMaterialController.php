<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatalogoMaterial;
use App\PublicidadMaterial;
use App\Pago;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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

    public function publicidadPendiente($buscar = null)
    {
        if (!empty($buscar))
        {
            $this->_buscarPalabra = $buscar;
            $publicidadMaterial = PublicidadMaterial::join('pagos', 'publicidadmaterial.id_pago', '=', 'pagos.id')
                    ->join('users', 'publicidadmaterial.id_usuario', '=', 'users.id')
                    ->select('publicidadmaterial.id_usuario', 'publicidadmaterial.id_pago', 'publicidadmaterial.imagen', 'pagos.fechaSolicitud')
                    ->whereNull('pagos.estado_pago')
                    ->where(function($query)
                    {
                        $buscar = $this->_buscarPalabra;
                        $query->where('pagos.fechaSolicitud', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('publicidadmaterial.id_pago', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.nombre', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.apellido_paterno', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.apellido_materno', 'LIKE', '%' . $buscar . '%');
                    })
                    ->orderByDesc('fechaSolicitud')
                    ->paginate(10);
        } else
        {
            $publicidadMaterial = PublicidadMaterial::join('pagos', 'publicidadmaterial.id_pago', '=', 'pagos.id')
                    ->select('publicidadmaterial.id_usuario', 'publicidadmaterial.id_pago', 'publicidadmaterial.imagen', 'pagos.fechaSolicitud')
                    ->whereNull('pagos.estado_pago')
                    ->orderByDesc('fechaSolicitud')
                    ->paginate(10);
        }

        return view('Administrador.publicity-pending-material', [
            'publicidadMaterial' => $publicidadMaterial
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

        return redirect()->route('admin.publicidad-pendiente-material')
                        ->with(['message' => 'Publicidad del material activada']);
    }

    public function removerPublicidad($id_pago)
    {
        $pago = Pago::find($id_pago);
        $pago->estado_pago = 0;
        $pago->update();

        return redirect()->route('admin.publicidad-pendiente-material')
                        ->with(['message' => 'Publicidad del material eliminada']);
    }

    public function publicidadActiva($buscar = null)
    {
        if (!empty($buscar))
        {
            $this->_buscarPalabra = $buscar;
            $materiales = PublicidadMaterial::join('pagos', 'publicidadmaterial.id_pago', '=', 'pagos.id')
                    ->join('users', 'publicidadmaterial.id_usuario', '=', 'users.id')
                    ->select('publicidadmaterial.id_usuario', 'publicidadmaterial.id_pago', 'pagos.fechaSolicitud', 'pagos.fechaAprobacion', 'pagos.vigencia')
                    ->where('pagos.estado_pago', '=', 1)
                    ->where(function($query)
                    {
                        $buscar = $this->_buscarPalabra;
                        $query->where('pagos.fechaSolicitud', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('pagos.fechaAprobacion', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('pagos.vigencia', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('publicidadmaterial.id_pago', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.nombre', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.apellido_paterno', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.apellido_materno', 'LIKE', '%' . $buscar . '%');
                    })
                    ->orderByDesc('pagos.fechaAprobacion')
                    ->paginate(10);
        } else
        {
            $materiales = PublicidadMaterial::join('pagos', 'publicidadmaterial.id_pago', '=', 'pagos.id')
                    ->select('publicidadmaterial.id_usuario', 'publicidadmaterial.id_pago', 'pagos.fechaSolicitud', 'pagos.fechaAprobacion', 'pagos.vigencia')
                    ->where('pagos.estado_pago', '=', 1)
                    ->orderByDesc('pagos.fechaAprobacion')
                    ->paginate(10);
        }

        return view('Administrador.publicity-active-material', [
            'materiales' => $materiales
        ]);
    }

    public function removerPublicidadActiva($id_pago)
    {
        $pago = Pago::find($id_pago);
        $pago->estado_pago = 0;
        $pago->update();

        return redirect()->route('admin.publicidad-activa-material')
                        ->with(['message' => 'Publicidad del material eliminada']);
    }

    public function publicidadEliminada($buscar = null)
    {
        if (!empty($buscar))
        {
            $this->_buscarPalabra = $buscar;
            $publicidadMaterial = PublicidadMaterial::join('pagos', 'publicidadmaterial.id_pago', '=', 'pagos.id')
                    ->join('users', 'publicidadmaterial.id_usuario', '=', 'users.id')
                    ->select('publicidadmaterial.id_usuario', 'publicidadmaterial.id_pago', 'publicidadmaterial.imagen', 'pagos.fechaSolicitud')
                    ->where('pagos.estado_pago', '=', 0)
                    ->where(function($query)
                    {
                        $buscar = $this->_buscarPalabra;
                        $query->where('pagos.fechaSolicitud', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('publicidadmaterial.id_pago', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.nombre', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.apellido_paterno', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.apellido_materno', 'LIKE', '%' . $buscar . '%');
                    })
                    ->orderByDesc('fechaSolicitud')
                    ->paginate(10);
        } else
        {
            $publicidadMaterial = PublicidadMaterial::join('pagos', 'publicidadmaterial.id_pago', '=', 'pagos.id')
                    ->select('publicidadmaterial.id_usuario', 'publicidadmaterial.id_pago', 'publicidadmaterial.imagen', 'pagos.fechaSolicitud')
                    ->where('pagos.estado_pago', '=', 0)
                    ->orderByDesc('fechaSolicitud')
                    ->paginate(10);
        }

        return view('Administrador.publicity-removed-material', [
            'publicidadMaterial' => $publicidadMaterial
        ]);
    }

    public function eliminarPublicidad($id_pago)
    {
        $pago = Pago::find($id_pago);
        $pago->delete();

        return redirect()->route('admin.publicidad-eliminada-material')
                        ->with(['message' => 'Publicidad del material eliminada']);
    }

    public function activarPublicidadRemovida($id_pago)
    {
        $pago = Pago::find($id_pago);
        if ($pago->fechaAprobacion == null)
        {
            $date = Carbon::now();
            $vigencia = Carbon::now()->addMonth();

            $pago = Pago::find($id_pago);
            $pago->fechaAprobacion = $date;
            $pago->estado_pago = 1;
            $pago->vigencia = $vigencia;
        } else
        {
            $pago->estado_pago = 1;
        }
        $pago->update();

        return redirect()->route('admin.publicidad-eliminada-material')
                        ->with(['message' => 'Publicidad del material activada']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalogoMateriales = CatalogoMaterial::leftJoin('publicidadmaterial', 'catalogomateriales.id', '=', 'publicidadmaterial.id_material')
                ->select('catalogomateriales.id', 'catalogomateriales.nombre')
                ->whereNull('publicidadmaterial.id_material')
                ->get();
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
            // $imagenRedimensionada = Image::make($imagen);
            // $imagenRedimensionada->resize(800, 533)->save(storage_path('app/publicidadMaterial/' . $imagenNombre));
            Storage::disk('publicidadMaterial')->put($imagenNombre, File::get($imagen));
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

    public function getImage($fileName)
    {
        $file = Storage::disk('publicidadMaterial')->get($fileName);
        return new Response($file, 200);
    }

}
