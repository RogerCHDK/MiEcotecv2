<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class RegisterController extends Controller
{
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
                    'nombre' => ['required', 'string', 'max:255'],
                    'apellidoPaterno' => ['required', 'string', 'max:255'],
                    'apellidoMaterno' => ['required', 'string', 'max:255'],
                    'alias' => ['required', 'string', 'max:255', 'unique:users'],
                    'imagen' => ['image'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $imagen = $data['imagen'] ?? null;
        if ($imagen != null)
        {
            //Modificar nombre para evitar duplicidad
            $imagenNombre = time() . $imagen->getClientOriginalName();
            //Guardar imagen en la carpeta storage/app/usuarios
            $imagenRedimensionada = Image::make($imagen);
            $imagenRedimensionada->resize(600, 800)->save(storage_path('app/usuarios/' . $imagenNombre));
//            Storage::disk('usuarios')->put($imagenNombre, File::get($imagen));
        }
        return User::create([
                    'nombre' => $data['nombre'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'apellido_paterno' => $data['apellidoPaterno'],
                    'apellido_materno' => $data['apellidoMaterno'],
                    'imagen' => isset($data['imagen']) ? time() . $data['imagen']->getClientOriginalName() : null,
                    'alias' => $data['alias'],
                    'rol' => 'Usuario',
        ]);
    }

}
