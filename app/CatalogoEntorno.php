<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogoEntorno extends Model
{

    public $timestamps = false;
    protected $table = 'catalogoentornos';

    public function consejos()
    {
        return$this->hasMany('App\Consejo');
    }

}
