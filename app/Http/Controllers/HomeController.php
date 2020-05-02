<?php

namespace App\Http\Controllers;
use \App\User;
use \App\Evento;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rol = \Auth::user()->rol;
        if ($rol == 'Administrador')
        {
            return view('Administrador.index');
        } elseif ($rol == 'Usuario') {
            $usuario = \Auth::user();
            $misEventos = Evento::where('id_usuario',$usuario->id)->get();
            $eventos = Evento::orderBy('nombre')->get();
            $users = User::orderBy('nombre')->get();
            return view('Usuario.welcome', ['eventos' => $eventos])->with(['misEventos' => $misEventos])->with('users',$users);
        } else
        { 
            $eventos = Evento::orderBy('nombre')->get();
            return view('Usuario_no_registrado.welcome', ['eventos' => $eventos]);
        }
    }

}
