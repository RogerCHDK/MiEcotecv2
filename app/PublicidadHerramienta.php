<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicidadHerramienta extends Model
{

    protected $table = 'publicidadherramienta';
    protected $fillable = ['enlace', 'imagen', 'id_usuario', 'id_pago', 'id_material'];
    public $timestamps = false;

    public function catalogoHerramienta()
    {
        return$this->belongsTo('App\CatalogoHerramienta', 'id_herramienta');
    }

    public function usuario()
    {
        return$this->belongsTo('App\User', 'id_usuario');
    }

    public function pago()
    {
        return$this->belongsTo('App\Pago', 'id_pago');
    }

}
