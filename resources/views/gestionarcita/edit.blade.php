@extends('layouts.index')

@section('contenido-titulo')
GestionarCita
@endsection

@section('contenido-descripcion')
Mostrar GestionarCita
@endsection

@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('gestionarcita.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<form action="{{route('gestionarcita.update',$gestionarcita->idCi)}}" method="POST" class="form-group">
    @method('PUT')
    @csrf

    <div class="row">
        <div class="col-xs-3">
            <label>idUsuario</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarcita->idUsuario}}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>idPublicacion</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarcita->idPublicacion}}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>fecha</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarcita->fecha}}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>hora</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarcita->hora}}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>direccion</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarcita->direccion}}">
        </div>
    </div>


    <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Actualizar</button>

    <a class="btn btn-lg btn-danger" href="{{route('gestionarcita.show',$gestionarcita->idCi)}} ">
        <i class="fa fa-trash-o"></i> Cancelar
    </a>
</form>


@endsection