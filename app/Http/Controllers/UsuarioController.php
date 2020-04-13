<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class UsuarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getImage($fileName)
    {
        $file = Storage::disk('usuarios')->get($fileName);
        return new Response($file, 200);
    }

}
