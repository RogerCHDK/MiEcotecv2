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
        if (Auth::guest()) {
            $eventos = Evento::orderBy('nombre')->get();
            return view('Usuario_no_registrado.welcome', ['eventos' => $eventos]);
        } else {
            
            $usuario = Auth::user();
            $misEventos = Evento::where('id_usuario',$usuario->id)->get();
            $eventos = Evento::orderBy('nombre')->get();
            $users = User::orderBy('nombre')->get();
            $registros = Registro::where('id_usuario',$usuario->id)->get();
            return view('Usuario.welcome', ['eventos' => $eventos])->with(['misEventos' => $misEventos])->with('users',$users)->with('registros',$registros);
        }
            
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
            'nombre' => ['String', 'max:255','required'],
            'objetivo' => ['String', 'max:255','required'],
            'descripcion' => ['String', 'max:255','required'],
            'fecha_inicio' => ['date','required'],
            'fecha_fin' => ['date','required'],
        ]);

        $imagen = $request->file('imagen');
         if ($imagen) { 
            $imagenNombre = time(). $imagen->getClientOriginalName(); 
            // $imagenRedimensionada = Image::make($imagen);
            // $imagenRedimensionada->resize(800, 533)->save(storage_path('app/eventos/' . $imagenNombre));
            Storage::disk('evento')->put($imagenNombre,File::get($imagen));
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

         return redirect('/evento')->with(['message' => 'Evento creado']);
    }

    
    public function show($id)
    {
        if (Auth::guest()) {
            $evento = Evento::find($id);
        $user = User::where('id',$evento->id_usuario)->get();
        
        
        $registros = count(Registro::where('id_evento',$id)->get());
        
        $reg = -1;
        
        return view('Usuario.event', ['evento' => $evento])->with('user',$user )->with('registros',$registros )->with('reg',$reg);
        } else {
            $usuario = Auth::user();
        $id_u = $usuario->id;
        $evento = Evento::find($id);
        $user = User::where('id',$evento->id_usuario)->get();
        
        $ban =count(Registro::select('id')->where('id_usuario', $id_u)->where('id_evento', $id)->get());
        $registros = count(Registro::where('id_evento',$id)->get());
        
        if ($ban===0) {
            $reg = 0;
        } else {
            $reg = Registro::select('id')->where('id_usuario', $id_u)->where('id_evento', $id)->get();
        }
        
        return view('Usuario.event', ['evento' => $evento])->with('user',$user )->with('usuario',$usuario )->with('registros',$registros )->with('reg',$reg);
            
        }
        
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
        $validate = $this->validate($request, [
            'imagen' => ['image'],
            'nombre' => ['String', 'max:255','required'],
            'objetivo' => ['String', 'max:255','required'],
            'descripcion' => ['String', 'max:255','required'],
            'fecha_inicio' => ['date','required'],
            'fecha_fin' => ['date','required'],
        ]);

        $evento = Evento::find($id);

        $imagen = $request->file('imagen');
         if ($imagen) { 
            $imagenNombre = time(). $imagen->getClientOriginalName(); 
            // $imagenRedimensionada = Image::make($imagen);
            // $imagenRedimensionada->resize(800, 533)->save(storage_path('app/eventos/' . $imagenNombre));
            Storage::disk('evento')->put($imagenNombre, File::get($imagen));
            Storage::disk('evento')->delete($evento->imagen);
            $evento->imagen = $imagenNombre;
        }

        
        
        $id_usu_evento = $request->id_usuario;
        $nombre_evento = $request->nombre;
        $objetivo_evento = $request->objetivo;
        $descripcion_evento = $request->descripcion;
        $fecha_creacion_evento = $request->fecha_creacion;
        $fecha_inicio_evento = $request->fecha_inicio;
        $hora_inicio_evento = $request->hora_inicio;
        $fecha_fin_evento = $request->fecha_fin;
        $hora_fin_evento = $request->hora_fin;
      

        $evento->id_usuario = $id_usu_evento;
        $evento->nombre = $nombre_evento;
        $evento->objetivo = $objetivo_evento;
        $evento->descripcion = $descripcion_evento;
        $evento->fecha_creacion = $fecha_creacion_evento;
        $evento->fecha_inicio = $fecha_inicio_evento;
        $evento->hora_inicio = $hora_inicio_evento;
        $evento->fecha_fin = $fecha_fin_evento;
        $evento->hora_fin = $hora_fin_evento;
       
        
        
        $evento->update();
        return redirect('/evento')->with(['message' => 'Evento modificado']);
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
        
        $evento = Evento::find($id);
        Storage::disk('evento')->delete($evento->imagen);
        $evento->delete();
        return redirect('/evento')->with(['message' => 'Evento eliminado']);

    }
     //Obtener imagen del evento
    public function getImage($fileName)
    {
        $file = Storage::disk('evento')->get($fileName);
        return new Response($file, 200);
    }
    public function eventos_N(){
        $eventos = Evento::orderBy('nombre')->get();
        return view('Usuario.welcome', ['eventos' => $eventos]);
    }
}
