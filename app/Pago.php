<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{

    protected $table = 'pagos'; 
    protected $fillable = ['id_usuario','tiempo','estado_pago','vigencia'];
    public $timestamps = false;

    public function usuario()
    {
        return$this->belongsTo('App\User', 'id_usuario');
    }
    
    public function productos()
    {
        return$this->hasMany('App\Productos');
    }
    
    public function servicios()
    {
        return$this->hasMany('App\Servicios');
    }
    
    public function publicidadHerramienta()
    {
        return$this->hasMany('App\PublicidadHerramienta', 'id_pago');
    }
    
    public function publicidadMaterial()
    {
        return$this->hasMany('App\PublicidadMaterial', 'id_pago');
    }

}
