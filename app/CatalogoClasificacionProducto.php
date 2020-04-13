<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogoClasificacionProducto extends Model
{

    protected $table = 'catalogoclasificacionproductos';

    public function productos()
    {
        return$this->hasMany('App\Producto');
    }

}
