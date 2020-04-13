<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{

    protected $table = 'asesores';

    public function usuario()
    {
        return$this->belongsTo('App\User', 'id_usuario');
    }
    
    public function catalogoClasificacionAsesor()
    {
        return$this->belongsTo('App\CatalogoClasificacionAsesor', 'id_clasificacionAsesor');
    }

}
