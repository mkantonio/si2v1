<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestacadoPublicacion extends Model
{
        //asociar el modelo a la tabla
        protected $table = 'DETALLEPDEST';

        //definir la clave primaria de la tabla
        protected $primaryKey = 'idPuDe';
    
        //declarar que campos se pueden llenar en la tabla
        protected $fillable= ['idPublicacion','idDestacado','precio','Descripcion'];
        public	$timestamps	=	false;
}
