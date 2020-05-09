<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{

    protected $table = 'comentarios';
    protected $fillable = ['id_usuario','asunto','comentario']; 
     public $timestamps = false;

    public function usuario()
    {
        return$this->belongsTo('App\User', 'id_usuario');
    }

}
