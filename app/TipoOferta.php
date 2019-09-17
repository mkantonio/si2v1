<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoOferta extends Model
{
    //asociar el modelo a la tabla
    protected $table = 'tipoferta';

    //definir la clave primaria de la tabla
    protected $primaryKey = 'idOf';

    //declarar que campos se pueden llenar en la tabla
    protected $fillable= ['tipTran'];
    public	$timestamps	=	false;
}
