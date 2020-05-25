<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Asesor;
use App\User;
use App\CatalogoClasificacionAsesor;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class AsesorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::guest())
        {

            $asesores = Asesor::orderBy('id')->get();

            $as = -1;
            return view('Usuario.advisers', ['asesores' => $asesores])->with('as', $as);
        } else
        {
            $usuario = Auth::user();
            $asesores = Asesor::orderBy('id')->get();
            $as = Asesor::where('id_usuario', $usuario->id);
            $ban = count(Asesor::where('id_usuario', $usuario->id)->get());
            if ($ban === 0)
            {
                $as = 0;
            } else
            {
                $as = Asesor::select('id')->where('id_usuario', $usuario->id)->get();
            }

            return view('Usuario.advisers', ['asesores' => $asesores])->with('as', $as)->with('usuario', $usuario);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = Auth::user();
        $tipos_asesor = CatalogoClasificacionAsesor::all();
        return view('Usuario.create-adviser', compact('users'))->with('tipos_asesor', $tipos_asesor);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Asesor::create($datos);
        return redirect('/asesor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response 
     */
    public function show($id)
    {
        $asesor = Asesor::find($id);

        return view('Usuario.adviser', ['asesor' => $asesor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asesor = Asesor::find($id);
        $users = Auth::user();
        $tipos_asesor = CatalogoClasificacionAsesor::all();

        return view('Usuario.edit-adviser', compact('users'))->with('tipos_asesor', $tipos_asesor)->with('asesor', $asesor);
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
        $asesor = Asesor::find($id);
        $datos = $request->all();
        $asesor->update($datos);
        return redirect('/asesor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $asesor = Asesor::find($id);
        $asesor->delete();
        return redirect('/asesor');
    }

    public function getImage($fileName)
    {
        $file = Storage::disk('usuarios')->get($fileName);
        return new Response($file, 200);
    }

}
