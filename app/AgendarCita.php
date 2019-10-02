<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgendarCita extends Model
{
    //asociar el modelo a la tabla
    protected $table = 'AGENDARCITA';

    //definir la clave primaria de la tabla
    protected $primaryKey = 'idCi';

    //declarar que campos se pueden llenar en la tabla
    protected $fillable= ['fecha','hora','direccion','idPublicacion','idUsuario'];
    public	$timestamps	=	false;
}
