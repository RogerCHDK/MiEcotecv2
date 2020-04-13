<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogoClasificacionServicio extends Model
{

    protected $table = 'catalogoclasificacionservicios';

    public function servicios()
    {
        return$this->hasMany('App\Servicio');
    }

}
