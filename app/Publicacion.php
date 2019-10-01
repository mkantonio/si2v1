<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    //asociar el modelo a la tabla
    protected $table = 'PUBLICACION';

    //definir la clave primaria de la tabla
    protected $primaryKey = 'idPub';

    //declarar que campos se pueden llenar en la tabla
    protected $fillable= ['nombre','preVenta','fecPub','fechaExp','estado','idInmueble','idTiOf','idUsuario'];
    public	$timestamps	= false;

    public function tipooferta()
    {
        return $this->belongsTo('App\TipoOferta', 'idTiOf', 'idOf');
    }

    public function inmueble()
    {
        return $this->hasOne('App\Inmueble', 'idInm', 'idPub');
    }

    public function usuario()
    {
        return $this->belongsTo('App\User', 'idUsuario', 'id');
    }

}
