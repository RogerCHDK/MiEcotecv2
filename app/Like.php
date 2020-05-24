<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{

	public $timestamps = false;
    protected $table = 'likes';
    protected $fillable = ['id_usuario','id_consejo'];

    public function usuario()
    {
        return$this->belongsTo('App\User', 'id_usuario');
    }

    public function consejo()
    {
        return$this->belongsTo('App\Consejo', 'id_consejo');
    }

}
