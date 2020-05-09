<?php

namespace App\Http\Controllers;
use App\Evento;
use App\User;
use Carbon\Carbon;
use App\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
 
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
            $registros = Registro::where('id_usuario',$usuario->id)->get();
            return view('Usuario.welcome', ['eventos' => $eventos])->with(['misEventos' => $misEventos])->with('users',$users)->with('registros',$registros);
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
        $validate = $this->validate($request, [
            'imagen' => ['required', 'image'],
        ]);

        $imagen = $request->file('imagen');
         if ($imagen) { 
            $imagenNombre = time(). $imagen->getClientOriginalName(); 
            $imagenRedimensionada = Image::make($imagen);
            $imagenRedimensionada->resize(800, 533)->save(storage_path('app/eventos/' . $imagenNombre));
            $request->imagen = $imagenNombre;
        }
        $evento = Evento::create(
            [
                'id_usuario' => $request->id_usuario,
                'nombre'=> $request->nombre,
                'objetivo'=> $request->objetivo,
                'descripcion'=> $request->descripcion,
                'fecha_creacion'=> $request->fecha_creacion,
                'fecha_inicio'=> $request->fecha_inicio,
                'hora_inicio'=> $request->hora_inicio,
                'fecha_fin'=> $request->fecha_fin,
                'hora_fin'=> $request->hora_fin,
                'imagen'=> $request->imagen
            ]
        );

         return redirect('/evento');
    }

    
    public function show($id)
    {
        $usuario = Auth::user();
        $evento = Evento::find($id);
        $user = User::where('id',$evento->id_usuario)->get();
        $registros = count(Registro::where('id',$evento->id)->get());
        
        return view('Usuario.event', ['evento' => $evento])->with('user',$user )->with('usuario',$usuario )->with('registros',$registros );
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
     //Obtener imagen del evento
    public function getImage($fileName)
    {
        $file = Storage::disk('evento')->get($fileName);
        return new Response($file, 200);
    }
}
