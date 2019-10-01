<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    //asociar el modelo a la tabla
    protected $table = 'METODOPAGO';

    //definir la clave primaria de la tabla
    protected $primaryKey = 'idMet';

    //declarar que campos se pueden llenar en la tabla
    protected $fillable= ['nombre','descripcion'];
    public	$timestamps	=	false;
}
