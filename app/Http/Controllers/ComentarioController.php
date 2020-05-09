<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comentario;

use Illuminate\Support\Facades\Auth; 
use App\Comentario; 

class ComentarioController extends Controller
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
        

    }

    public function indexAdministrador()
    {
        $sugCom_Registro = Comentario::where('asunto', '=', 'Registro')
                        ->orderBy('id')->paginate(10);
        $sugCom_Eventos = Comentario::where('asunto', '=', 'Eventos')
                        ->orderBy('id')->paginate(10);
        $sugCom_Consejos = Comentario::where('asunto', '=', 'Consejos')
                        ->orderBy('id')->paginate(10);
        $sugCom_Asesores = Comentario::where('asunto', '=', 'Asesores')
                        ->orderBy('id')->paginate(10);
        $sugCom_Productos = Comentario::where('asunto', '=', 'Productos')
                        ->orderBy('id')->paginate(10);
        $sugCom_Servicios = Comentario::where('asunto', '=', 'Servicios')
                        ->orderBy('id')->paginate(10);
        $sugCom_Publicidad = Comentario::where('asunto', '=', 'Publicidad')
                        ->orderBy('id')->paginate(10);
        $sugCom_Otros = Comentario::where('asunto', '=', 'Otros')
                        ->orderBy('id')->paginate(10);
        return view('Administrador.suggestions-comments', [
            'registro' => $sugCom_Registro,
            'eventos' => $sugCom_Eventos,
            'consejos' => $sugCom_Consejos,
            'asesores' => $sugCom_Asesores,
            'productos' => $sugCom_Productos,
            'servicios' => $sugCom_Servicios,
            'publicidad' => $sugCom_Publicidad,
            'otros' => $sugCom_Otros
        ]);
    }
 
    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = Auth::user();
       return view('Usuario.suggestions-comments',compact("usuario")); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $comentario = Comentario::create($request->all());
        return redirect()->route('publicidad.index');
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
        $sugCom = Comentario::find($id);
        
        $sugCom->delete();
        
        return redirect()->route('admin.sug-com')
                        ->with(['message' => 'Sugerencia/Comentario eliminado']);
    }

}
