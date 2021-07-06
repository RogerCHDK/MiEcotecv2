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
    public function __construct()
    {
        $this->middleware('auth',['except'=> ['index_no_registrado','getProducto','show','getImage']]);
    }

    public function index()
    {
        $usuario = Auth::user();
        $clasificacion = CatalogoClasificacionProducto::all();
        $producto = Producto::all();
        $mis_productos = Producto::where('id_usuario', $usuario->id)->get();
        $bandera = true;
        $clasificacion_filtrada = null;
        return view('Usuario.products')->with('productos', $producto)->with('clasificaciones', $clasificacion)->with('mis_productos', $mis_productos)->with('bandera',$bandera)->with('clasificacion_filtrada',$clasificacion_filtrada);
    } 

     public function index_no_registrado()
    {
        
        $clasificacion = CatalogoClasificacionProducto::all();
        $producto = Producto::all();
        $bandera = true;
        $clasificacion_filtrada = null;
        return view('Usuario_no_registrado.products')->with('productos', $producto)->with('clasificaciones', $clasificacion)->with('bandera',$bandera)->with('clasificacion_filtrada',$clasificacion_filtrada);
    } 

    public function publicidadPendiente($buscar = null)
    {
        if (!empty($buscar))
        {
            $this->_buscarPalabra = $buscar;
            $productos = Producto::join('pagos', 'productos.id_pago', '=', 'pagos.id')
                    ->join('users', 'productos.id_usuario', '=', 'users.id')
                    ->select('productos.id_usuario', 'productos.id_pago', 'productos.nombre', 'productos.imagen', 'pagos.fechaSolicitud')
                    ->whereNull('pagos.estado_pago')
                    ->where(function($query)
                    {
                        $buscar = $this->_buscarPalabra;
                        $query->where('productos.nombre', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('pagos.fechaSolicitud', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('productos.id_pago', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.nombre', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.apellido_paterno', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.apellido_materno', 'LIKE', '%' . $buscar . '%');
                    })
                    ->orderByDesc('fechaSolicitud')
                    ->paginate(10);
        } else
        {
            $productos = Producto::join('pagos', 'productos.id_pago', '=', 'pagos.id')
                    ->select('productos.id_usuario', 'productos.id_pago', 'productos.nombre', 'productos.imagen', 'pagos.fechaSolicitud')
                    ->whereNull('pagos.estado_pago')
                    ->orderByDesc('fechaSolicitud')
                    ->paginate(10);
        }

        return view('Administrador.publicity-pending-product', [
            'productos' => $productos
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

        return redirect()->route('admin.publicidad-pendiente-producto')
                        ->with(['message' => 'Publicidad del producto activada']);
    }

    public function removerPublicidad($id_pago)
    {
        $pago = Pago::find($id_pago);
        $pago->estado_pago = 0;
        $pago->update();

        return redirect()->route('admin.publicidad-pendiente-producto')
                        ->with(['message' => 'Publicidad del producto eliminada']);
    }

    public function publicidadActiva($buscar = null)
    {
        if (!empty($buscar))
        {
            $this->_buscarPalabra = $buscar;
            $productos = Producto::join('pagos', 'productos.id_pago', '=', 'pagos.id')
                    ->join('users', 'productos.id_usuario', '=', 'users.id')
                    ->select('productos.id_usuario', 'productos.id_pago', 'productos.nombre', 'pagos.fechaSolicitud', 'pagos.fechaAprobacion', 'pagos.vigencia')
                    ->where('pagos.estado_pago', '=', 1)
                    ->where(function($query)
                    {
                        $buscar = $this->_buscarPalabra;
                        $query->where('productos.nombre', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('pagos.fechaSolicitud', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('pagos.fechaAprobacion', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('pagos.vigencia', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('productos.id_pago', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.nombre', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.apellido_paterno', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.apellido_materno', 'LIKE', '%' . $buscar . '%');
                    })
                    ->orderByDesc('pagos.fechaAprobacion')
                    ->paginate(10);
        } else
        {
            $productos = Producto::join('pagos', 'productos.id_pago', '=', 'pagos.id')
                    ->select('productos.id_usuario', 'productos.id_pago', 'productos.nombre', 'pagos.fechaSolicitud', 'pagos.fechaAprobacion', 'pagos.vigencia')
                    ->where('pagos.estado_pago', '=', 1)
                    ->orderByDesc('pagos.fechaAprobacion')
                    ->paginate(10);
        }

        return view('Administrador.publicity-active-product', [
            'productos' => $productos
        ]);
    }

    public function removerPublicidadActiva($id_pago)
    {
        $pago = Pago::find($id_pago);
        $pago->estado_pago = 0;
        $pago->update();

        return redirect()->route('admin.publicidad-activa-producto')
                        ->with(['message' => 'Publicidad del producto eliminada']);
    }

    public function publicidadEliminada($buscar = null)
    {
        if (!empty($buscar))
        {
            $this->_buscarPalabra = $buscar;
            $productos = Producto::join('pagos', 'productos.id_pago', '=', 'pagos.id')
                    ->join('users', 'productos.id_usuario', '=', 'users.id')
                    ->select('productos.id_usuario', 'productos.id_pago', 'productos.nombre', 'productos.imagen', 'pagos.fechaSolicitud')
                    ->where('pagos.estado_pago', '=', 0)
                    ->where(function($query)
                    {
                        $buscar = $this->_buscarPalabra;
                        $query->where('productos.nombre', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('pagos.fechaSolicitud', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('productos.id_pago', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.nombre', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.apellido_paterno', 'LIKE', '%' . $buscar . '%')
                        ->orwhere('users.apellido_materno', 'LIKE', '%' . $buscar . '%');
                    })
                    ->orderByDesc('fechaSolicitud')
                    ->paginate(10);
        } else
        {
            $productos = Producto::join('pagos', 'productos.id_pago', '=', 'pagos.id')
                    ->select('productos.id_usuario', 'productos.id_pago', 'productos.nombre', 'productos.imagen', 'pagos.fechaSolicitud')
                    ->where('pagos.estado_pago', '=', 0)
                    ->orderByDesc('fechaSolicitud')
                    ->paginate(10);
        }

        return view('Administrador.publicity-removed-product', [
            'productos' => $productos
        ]);
    }

    public function eliminarPublicidad($id_pago)
    {
        $pago = Pago::find($id_pago);
        $pago->delete();

        return redirect()->route('admin.publicidad-eliminada-producto')
                        ->with(['message' => 'Publicidad del producto eliminada']);
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

        return redirect()->route('admin.publicidad-eliminada-producto')
                        ->with(['message' => 'Publicidad del producto activada']);
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
        return view('Usuario.create-product')->with('productos', $producto)->with('usuario', $usuario);
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
            'nombre' => ['String', 'max:255','required'],
            'descripcion' => ['String', 'max:255','required'],
            'url' => ['String', 'max:255','required'],
            'telefono' => ['Integer','required'],
        ]);

        $date = Carbon::now();
        $pago = Pago::create(
                        [
                            'id_usuario' => $request->id_usuario,
                            'fechaSolicitud' => $date,
                            'fechaAprobacion' => null,
                            'estado_pago' => null,
                            'vigencia' => null,
                        ]
        );
        $imagen = $request->file('imagen');
        if ($imagen)
        {
            $imagenNombre = time() . $imagen->getClientOriginalName();
            // $imagenRedimensionada = Image::make($imagen);
            // $imagenRedimensionada->resize(800, 533)->save(storage_path('app/productos/' . $imagenNombre));
            Storage::disk('productos')->put($imagenNombre, File::get($imagen));
            $request->imagen = $imagenNombre;
        }

        $producto = Producto::create(
                        [
                            'id_usuario' => $request->id_usuario,
                            'id_pago' => $pago->id,
                            'id_clasificacionProducto' => $request->id_clasificacionProducto,
                            'nombre' => $request->nombre,
                            'imagen' => $request->imagen,
                            'descripcion' => $request->descripcion,
                            'precio' => $request->precio,
                            'url' => $request->url,
                            'telefono' => $request->telefono,
                        ]
        );

        return redirect()->route('usuario.publicidad')->with(['message' => 'Publicidad del producto solicitada, en los próximos días se validará el pago. '
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
        $producto = Producto::findOrFail($id);
        return view("Usuario.product", compact("producto"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $elemento = Producto::findOrFail($id);
        $productos = CatalogoClasificacionProducto::all();
        return view('Usuario.edit-product')->with('elemento',$elemento)->with('productos',$productos);
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
            'nombre' => ['String', 'max:255','required'],
            'descripcion' => ['String', 'max:255','required'],
            'url' => ['String', 'max:255','required'],
            'telefono' => ['Integer','required'],
        ]);
        $producto = Producto::findOrFail($id);
        $producto->nombre = $request->nombre;
        $producto->id_clasificacionProducto = $request->id_clasificacionProducto;
        $producto->descripcion = $request->descripcion;
        $producto->url = $request->url;
        $producto->telefono = $request->telefono;
        $producto->precio = $request->precio; 

        $imagen = $request->file('imagen');
        if ($imagen)
        { 
            $imagenNombre = time() . $imagen->getClientOriginalName();
            // $imagenRedimensionada = Image::make($imagen);
            // $imagenRedimensionada->resize(800, 533)->save(storage_path('app/productos/' . $imagenNombre));
            Storage::disk('productos')->put($imagenNombre, File::get($imagen));
            Storage::disk('productos')->delete($producto->imagen); 
            $producto->imagen= $imagenNombre; 
        }

        $producto->save();

         return redirect()->route('productos.index')
                        ->with(['message' => 'Producto actualizado']);

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

    public function getProducto($id)
    {
      
        $usuario = Auth::user();
        if ($usuario) {
        $clasificacion = CatalogoClasificacionProducto::all();
        $producto = Producto::where('id_clasificacionProducto',$id)->get();
        $mis_productos = Producto::where('id_usuario', $usuario->id)->where('id_clasificacionProducto',$id)->get();
        $bandera = false;
        $clasificacion_filtrada = CatalogoClasificacionProducto::findOrFail($id);
        return view('Usuario.products')->with('productos', $producto)->with('clasificaciones', $clasificacion)->with('mis_productos', $mis_productos)->with('bandera',$bandera)->with('clasificacion_filtrada',$clasificacion_filtrada);
        }else{
        $clasificacion = CatalogoClasificacionProducto::all();
        $producto = Producto::where('id_clasificacionProducto',$id)->get();
        $bandera = false;
        $clasificacion_filtrada = CatalogoClasificacionProducto::findOrFail($id);
        return view('Usuario_no_registrado.products')->with('productos', $producto)->with('clasificaciones', $clasificacion)->with('bandera',$bandera)->with('clasificacion_filtrada',$clasificacion_filtrada);
        }
        

       /* $producto = Producto::where('id_clasificacionProducto',$id)->get();
        return $producto;*/
    }

}
