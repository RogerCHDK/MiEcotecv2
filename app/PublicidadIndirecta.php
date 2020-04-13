<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicidadIndirecta extends Model
{

    protected $table = 'publicidadindirecta';

    public function usuario()
    {
        return$this->belongsTo('App\User', 'id_usuario');
    }

    public function pago()
    {
        return$this->belongsTo('App\Pago', 'id_pago');
    }

    public function catalogoMaterial()
    {
        return$this->belongsTo('App\CatalogoMaterial', 'id_material');
    }

    public function catalogoHerramienta()
    {
        return$this->belongsTo('App\CatalogoHerramienta', 'id_herramienta');
    }

}
