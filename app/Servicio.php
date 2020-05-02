<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{

    protected $table = 'servicios'; 
    protected $fillable = ['id_usuario','id_pago','id_clasificacionServicio','imagen',
     'nombre_establecimiento','estado','municipio','colonia','calle','url','descripcion','telefono'];
    public $timestamps = false;

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
