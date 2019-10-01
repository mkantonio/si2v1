<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    //asociar el modelo a la tabla
    protected $table = 'AMBIENTE';

      //definir la clave primaria de la tabla
    protected $primaryKey = 'idAmb';
      //declarar que campos se pueden llenar en la tabla
    protected $fillable= ['nroBaño','nroAmb','garaje'];
    public	$timestamps	= false;

    public function inmueble(){
        return $this->belongsTo('App\Inmueble', 'idInmueble', 'idInm');
    }

}
