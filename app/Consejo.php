<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consejo extends Model
{
    public $timestamps = false;
    protected $table = 'consejos';
    protected $fillable = ['id_usuario','id_entorno','nombre','imagen','descripcion'];

    public function usuario()
    {
        return$this->belongsTo('App\User', 'id_usuario');
    }

    public function catalogoEntorno()
    {
        return$this->belongsTo('App\CatalogoEntorno', 'id_entorno');
    }

    public function likes()
    {
        return $this->hasMany('App\Like','id_consejo');
    }
    
    public function catalogoMateriales()
    {
        return $this->belongsToMany('App\CatalogoMaterial', 'materiales_consejos', 'id_consejo', 'id_material');
    }
    
    public function catalogoHerramientas()
    {
        return $this->belongsToMany('App\CatalogoHerramienta', 'herramientas_consejos', 'id_consejo', 'id_herramienta');
    }

}
