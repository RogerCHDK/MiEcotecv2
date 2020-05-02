<?php

namespace App\Http\Controllers;
use App\Evento;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index() //Usuario registrado
    {
            $usuario = Auth::user();
            $misEventos = Evento::where('id_usuario',$usuario->id)->get();
            $eventos = Evento::orderBy('nombre')->get();
            $users = User::orderBy('nombre')->get();
            return view('Usuario.welcome', ['eventos' => $eventos])->with(['misEventos' => $misEventos])->with('users',$users);
    } 

    
    
    public function create()
    {
        $users = Auth::user();
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        return view('Usuario.create-event', compact('users'))->with('date',$date);
    }
 
     
    public function store(Request $request)
    {
        $datos = $request->all();
        Evento::create($datos);
        $usuario = Auth::user();
         $eventos = Evento::orderBy('nombre')->get();
         return redirect('/evento');
            //return view('Usuario.welcome', ['eventos' => $eventos])->with('usuario',$usuario);
    }

    
    public function show($id)
    {
        $usuario = Auth::user();
        $evento = Evento::find($id);
        $user = User::where('id',$evento->id_usuario)->get();
        return view('Usuario.event', ['evento' => $evento])->with('user',$user )->with('usuario',$usuario );
    } 

    /** 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::find($id);
        $users = Auth::user();
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        return view('Usuario.edit-event', compact('users'))->with('date',$date)->with('evento',$evento);
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
        $usuario = Auth::user();
        $misEventos = Evento::where('id_usuario',$usuario->id)->get();
            $eventos = Evento::orderBy('nombre')->get();
            $users = User::orderBy('nombre')->get();
        $datos = $request->all();
        $evento = Evento::find($id);
        $evento->update($datos);
        return redirect('/evento');
        //return view('Usuario.welcome', ['eventos' => $eventos])->with(['misEventos' => $misEventos])->with('users',$users);
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
        $evento = Evento::find($id);
        $evento->estatus = 0;
        $evento->save();
        return redirect('/evento');
        */
    }
}
