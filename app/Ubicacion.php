<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    //asociar el modelo a la tabla
    protected $table = 'UBICACION';

      //definir la clave primaria de la tabla
    protected $primaryKey = 'idUbic';
      //declarar que campos se pueden llenar en la tabla
    protected $fillable= ['uv','manzano','barrio','calle'];
    public	$timestamps	= false;

    public function inmueble(){
        return $this->belongsTo('App\Inmueble', 'idIn', 'idInm');
    }
}
