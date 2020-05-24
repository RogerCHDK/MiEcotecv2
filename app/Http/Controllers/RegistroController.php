<?php

namespace App\Http\Controllers;
use App\Evento;
use App\User;
use App\Registro;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{ 
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
        Registro::create($datos);
         return redirect('/evento');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::find($id);
        
        $registros = count(Registro::where('id_evento',$id)->get());
        if ($registros === 0) {
            $registros = 0;
        } else {
            $registros = Registro::where('id_evento', $id)->get();
            //$registros = Registro::where('id_evento', $id)->paginate(10);
        }
        
        return view('Usuario.assistants')->with('registros',$registros)->with('evento',$evento);
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
        if ($id===0) {
            //return back()->with('status','Registrate primero');
            return redirect('/evento');
        } else {
            $registro = Registro::find($id);
            $registro->delete();
        }
        
        return redirect('/evento');
        
    }
}
