<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
      //asociar el modelo a la tabla
    protected $table = 'INMUEBLE';

      //definir la clave primaria de la tabla
    protected $primaryKey = 'idInm';
      //declarar que campos se pueden llenar en la tabla
    protected $fillable= ['superficie','descripcion','amoblado'];
    public	$timestamps	= false;

    public function categoria(){
        return $this->belongsTo('App\Categoria', 'idCategoria', 'idCat');
    }

    public function tipoinmueble(){
        return $this->belongsTo('App\TipoInmueble', 'idTipo', 'idTip');
    }

    public function zona(){
        return $this->belongsTo('App\Zona', 'idZona', 'idZon');
    }
}
