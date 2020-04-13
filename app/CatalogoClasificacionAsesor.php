<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogoClasificacionAsesor extends Model
{

    protected $table = 'catalogoclasificacionasesores';

    public function asesores()
    {
        return$this->hasMany('App\Asesor');
    }

}
