<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'USERS';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'rol',
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

    public function esAdmin()
    {
        if (!$this->rol == null) {
            return true;
        }
        return false;
    }

    public function bitacora()
    {
        $this->hasOne('App\Bitacora', 'user_id', 'id');
    }

    public function publicacion()
    {
        return $this->hasMany('App\Publicacion', 'idUsuario', 'id');
    }

    public function countPublicacion(){
        return $this->publicacion->count();
    }
}
