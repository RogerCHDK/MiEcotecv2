<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogoHerramienta extends Model
{

    public $timestamps = false;
    protected $table = 'catalogoherramientas';

    public function publicidadIndirecta()
    {
        return$this->hasMany('App\PublicidadIndirecta');
    }

    public function consejos()
    {
        return $this->belongsToMany('App\Consejo', 'herramientas_consejos', 'id_herramienta', 'id_consejo');
    }

}
