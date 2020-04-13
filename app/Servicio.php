<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{

    protected $table = 'servicios';

    public function usuario()
    {
        return$this->belongsTo('App\User', 'id_usuario');
    }

    public function pago()
    {
        return$this->belongsTo('App\Pago', 'id_pago');
    }

    public function catalogoClasificacionServicio()
    {
        return$this->belongsTo('App\CatalogoClasificacionServicio', 'id_clasificacionServicio');
    }

}
