<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Asesor;
use App\User;
use App\CatalogoClasificacionAsesor;
class AsesorController extends Controller
{
    public function index()
    {
        $asesores = Asesor::orderBy('id')->get();
        
        return view('Usuario.advisers', ['asesores' => $asesores]);
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
        return view('Usuario.create-adviser', compact('users'))->with('tipos_asesor',$tipos_asesor);
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
        /*
        afaefe
        $asesor = Asesor::find($id);
        $asesor->delete();
        return redirect()->route('admin.asesores')
                        ->with(['message' => 'Clasificación eliminada']);
                        */ 
    }

    
}
