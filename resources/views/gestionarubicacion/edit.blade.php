@extends('layouts.index')

@section('contenido-titulo')
GestionarUbicacion
@endsection

@section('contenido-descripcion')
GestionarUbicacion
@endsection

@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('gestionarubicacion.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<form action="{{route('gestionarinmueble.update',$gestionarubicacion->idUbic)}}" method="POST" class="form-group">
    @method('PUT')
    @csrf


    <div class="row">
        <div class="col-xs-3">
            <label>UV</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarubicacion->uv}}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>Manzano</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarubicacion->manzano}}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>barrio</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarubicacion->barrio}}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>calle</label>
            <input type="textarea" class="form-control input-lg" value="{{$gestionarubicacion->calle}}">
        </div>
    </div>


    <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Actualizar</button>

    <a class="btn btn-lg btn-danger" href="{{route('gestionarubicacion.show',$gestionarubicacion->idUbic)}} ">
        <i class="fa fa-trash-o"></i> Cancelar
    </a>
</form>


@endsection