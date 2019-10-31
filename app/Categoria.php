<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    //asociar el modelo a la tabla
    protected $table = 'CATEGORIA';

    //definir la clave primaria de la tabla
    protected $primaryKey = 'idCat';

    //declarar que campos se pueden llenar en la tabla
    protected $fillable= ['nombreCat'];
    public	$timestamps	=	false;

    public function inmueble()
    {
        return $this->hasMany('App\Inmueble', 'idCategoria', 'idCat');
    }

}