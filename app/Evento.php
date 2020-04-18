<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
	public $timestamps = false;
    protected $table = 'eventos';

    public function usuario()
    {
        return$this->belongsTo('App\User', 'id_usuario');
    }
    
    public function registros()
    {
        return$this->hasMany('App\Registro');
    }
protected $fillable = ['id_usuario','nombre','objetivo','descripcion','fecha_creacion','fecha_inicio','hora_inicio','fecha_fin','hora_fin'];
}
