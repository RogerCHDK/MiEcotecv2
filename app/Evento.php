<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{

    protected $table = 'eventos';

    public function usuario()
    {
        return$this->belongsTo('App\User', 'id_usuario');
    }
    
    public function registros()
    {
        return$this->hasMany('App\Registro');
    }

}
