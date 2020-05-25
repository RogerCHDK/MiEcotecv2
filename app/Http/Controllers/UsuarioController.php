<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Validation\Rule;

class UsuarioController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('Usuario.view-profile')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('Usuario.profile')->with('user',$user);
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
/*

        $validate = $this->validate($request, [
            'imagen' => ['required', 'image'],
        ]);

        $imagen = $request->file('imagen');
         if ($imagen) { 
            $imagenNombre = time(). $imagen->getClientOriginalName(); 
            $imagenRedimensionada = Image::make($imagen);
            $imagenRedimensionada->resize(800, 533)->save(storage_path('app/usuarios/' . $imagenNombre));
            $request->imagen = $imagenNombre;
        }
        
        $user = User::find($id);
        
        //$imagen_consejo = $request->imagen;
        
        $user->nombre = $request->nombre;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->apellido_paterno = $request->apellido_paterno;
        $user->apellido_materno = $request->apellido_materno;
        //$user->imagen = $imagen_consejo;
        $user->alias = $request->alias;
        $user->enlace_facebook = $request->enlace_facebook;
        $user->enlace_instagram = $request->enlace_instagram;
        $user->enlace_twitter = $request->enlace_twitter;

        $user->update();
        return view('Usuario.profile')->with('user',$user);
*/
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

    //Obtener imagen de usuario
    public function getImage($fileName)
    {
        $file = Storage::disk('usuarios')->get($fileName);
        return new Response($file, 200);
    }

}
