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
<form action="{{route('gestionarinmueble.update',$gestionarpublicacion->idPub)}}" method="POST" class="form-group">
    @method('PUT')
    @csrf



    <div class="row">
        <div class="col-xs-3">
            <label>nombre</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarpublicacion->nombre}}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>fecPub</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarpublicacion->fecPub}}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>fecExp</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarpublicacion->fecExp}}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>estado</label>
            <input type="textarea" class="form-control input-lg" value="{{$gestionarpublicacion->estado}}">
        </div>
    </div>


    <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Actualizar</button>

    <a class="btn btn-lg btn-danger" href="{{route('gestionarpublicacion.show',$gestionarpublicacion->idPub)}} ">
        <i class="fa fa-trash-o"></i> Cancelar
    </a>
</form>


@endsection