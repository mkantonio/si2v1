@extends('layouts.index')

@section('contenido-titulo')
GestionarPublicacion
@endsection

@section('contenido-descripcion')
GestionarPublicacion
@endsection

@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('gestionarpublicacion.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<div class="form-group">


    <div class="row">
        <div class="col-xs-3">
            <label>nombre</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarpublicacion->nombre}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>fecPub</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarpublicacion->fecPub}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>fecExp</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarpublicacion->fecExp}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>estado</label>
            <input type="textarea" class="form-control input-lg" value="{{$gestionarpublicacion->estado}}" readonly>
        </div>
    </div>



</div>


<a class="btn btn-lg btn-primary" href="{{route('gestionarpublicacion.edit',$gestionarpublicacion->idPub)}} ">
    <i class="fa fa-edit"></i> Editar
</a>
<form action="{{ route('gestionarpublicacion.destroy',$gestionarpublicacion->idPub) }}" method="POST">
    @method('DELETE')
    {{ csrf_field() }}
    <input type="submit" value="Eliminar" class="btn btn-lg btn-danger">

</form>




@endsection