<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicidadMaterial extends Model
{

    protected $table = 'publicidadmaterial';
    protected $fillable = ['enlace', 'imagen', 'id_usuario', 'id_pago', 'id_material'];
    public $timestamps = false;

    public function catalogoMaterial()
    {
        return$this->belongsTo('App\CatalogoMaterial', 'id_material');
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
