<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    //asociar el modelo a la tabla
    protected $table = 'categoria';

    //definir la clave primaria de la tabla
    protected $primaryKey = 'idCat';

    //declarar que campos se pueden llenar en la tabla
    protected $fillable= ['nombreCat'];
    public	$timestamps	=	false;

    // public function producto()
    // {
    //     return $this->hasMany('App\Producto', 'categoria_id', 'id');
    // }

}