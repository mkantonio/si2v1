<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoInmueble extends Model
{
    //asociar el modelo a la tabla
    protected $table = 'tipoinmueble';

    //definir la clave primaria de la tabla
    protected $primaryKey = 'idTip';

    //declarar que campos se pueden llenar en la tabla
    protected $fillable= ['tipoInm'];
    public	$timestamps	=	false;
}
