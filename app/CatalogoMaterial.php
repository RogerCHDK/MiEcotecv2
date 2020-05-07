<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogoMaterial extends Model
{

    public $timestamps = false;
    protected $table = 'catalogomateriales';
    protected $fillable = ['id_pago','nombre','imagen','imagen_pago'];

    public function publicidadIndirecta()
    {
        return$this->hasMany('App\PublicidadIndirecta');
    }

    public function consejos()
    {
        return $this->belongsToMany('App\Consejo', 'materiales_consejos', 'id_material', 'id_consejo');
    }

}
