<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    protected $table = 'productos';
    protected $fillable = ['id_usuario', 'id_pago', 'id_clasificacionProducto', 'nombre',
        'imagen', 'descripcion', 'precio', 'url', 'telefono'];
    public $timestamps = false;

    public function usuario()
    {
        return$this->belongsTo('App\User', 'id_usuario');
    }

    public function pago()
    {
        return$this->belongsTo('App\Pago', 'id_pago');
    }

    public function catalogoClasificacionProducto()
    {
        return$this->belongsTo('App\CatalogoClasificacionProducto', 'id_clasificacionProducto');
    }

}
