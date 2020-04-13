<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{

    protected $table = 'likes';

    public function usuario()
    {
        return$this->belongsTo('App\User', 'id_usuario');
    }

    public function consejo()
    {
        return$this->belongsTo('App\Consejo', 'id_consejo');
    }

}
