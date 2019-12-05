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
<div class="form-group">

    <div class="row">
        <div class="col-xs-3">
            <label>idUsuario</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarcita->idUsuario}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>idPublicacion</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarcita->idPublicacion}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>fecha</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarcita->fecha}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>hora</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarcita->hora}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>direccion</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarcita->direccion}}" readonly>
        </div>
    </div>

</div>


<a class="btn btn-lg btn-primary" href="{{route('gestionarcita.edit',$gestionarcita->idCi)}} ">
    <i class="fa fa-edit"></i> Editar
</a>
<form action="{{ route('gestionarcita.destroy',$gestionarcita->idCi) }}" method="POST">
    @method('DELETE')
    {{ csrf_field() }}
    <input type="submit" value="Eliminar" class="btn btn-lg btn-danger">

</form>




@endsection