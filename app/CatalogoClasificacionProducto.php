<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogoClasificacionProducto extends Model
{

    public $timestamps = false;
    protected $table = 'catalogoclasificacionproductos';

    public function productos()
    {
        return$this->hasMany('App\Producto');
    }

}
