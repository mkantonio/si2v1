<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    //asociar el modelo a la tabla
    protected $table = 'ZONA';

    //definir la clave primaria de la tabla
    protected $primaryKey = 'idZon';

    //declarar que campos se pueden llenar en la tabla
    protected $fillable= ['nombreZon'];
    public	$timestamps	=	false;
}
