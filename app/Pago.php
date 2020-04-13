<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{

    protected $table = 'pagos';

    public function usuario()
    {
        return$this->belongsTo('App\User', 'id_usuario');
    }

    public function publicidadIndirecta()
    {
        return$this->hasMany('App\PublicidadIndirecta');
    }
    
    public function productos()
    {
        return$this->hasMany('App\Productos');
    }
    
    public function servicios()
    {
        return$this->hasMany('App\Servicios');
    }

}
