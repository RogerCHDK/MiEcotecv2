<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{

    protected $table = 'registros';
    public $timestamps = false;
    protected $fillable = [
        'id_usuario', 'id_evento'
    ];

    public function usuario()
    {
        return$this->belongsTo('App\User', 'id_usuario');
    }
    
    public function evento()
    {
        return$this->belongsTo('App\Evento', 'id_evento');
    }

}
