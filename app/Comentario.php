<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{

    protected $table = 'comentarios';

    public function usuario()
    {
        return$this->belongsTo('App\User', 'id_usuario');
    }

}
