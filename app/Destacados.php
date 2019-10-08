<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destacados extends Model
{
     //asociar el modelo a la tabla
     protected $table = 'DESTACADO';

     //definir la clave primaria de la tabla
     protected $primaryKey = 'idD';
 
     //declarar que campos se pueden llenar en la tabla
     protected $fillable= ['dias','tipTex','color'];
     public	$timestamps	=	false;
}
