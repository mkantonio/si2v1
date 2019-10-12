<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    //asociar el modelo a la tabla
    protected $table = 'BITACORA';

    //definir la clave primaria de la tabla
    protected $primaryKey = 'id';

    //declarar que campos se pueden llenar en la tabla
    protected $fillable= ['user_id','accion','tabla','ip'];

     public function user()
     {
         return $this->belongsTo('App\User', 'user_id', 'id');
     }
}
