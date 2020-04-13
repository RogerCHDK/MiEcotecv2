<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    use Notifiable;

    public $timestamps = false;

    public function comentarios()
    {
        return$this->hasMany('App\Comentario');
    }

    public function eventos()
    {
        return$this->hasMany('App\Evento');
    }

    public function registros()
    {
        return$this->hasMany('App\Registro');
    }
    
    public function publicidadIndirecta()
    {
        return$this->hasMany('App\PublicidadIndirecta');
    }
    
    public function pagos()
    {
        return$this->hasMany('App\Pago');
    }
    
    public function productos()
    {
        return$this->hasMany('App\Producto');
    }
    
    public function servicios()
    {
        return$this->hasMany('App\Servicio');
    }

    public function asesor()
    {
        return$this->hasOne('App\Asesor');
    }
    
    public function likes()
    {
        return$this->hasMany('App\Like');
    }
    
    public function consejos()
    {
        return$this->hasMany('App\Consejo');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'email', 'password','apellido_paterno','apellido_materno','imagen','alias','rol'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
