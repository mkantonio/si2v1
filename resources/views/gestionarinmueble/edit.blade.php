@extends('layouts.index')

@section('contenido-titulo')
GestionarInmueble
@endsection

@section('contenido-descripcion')
GestionarInmueble
@endsection

@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('gestionarinmueble.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<form action="{{route('gestionarinmueble.update',$gestionarinmueble->idInm)}}" method="POST" class="form-group">
    @method('PUT')
    @csrf


    <div class="row">
        <div class="col-xs-3">
            <label>idInmueble</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarinmueble->idInm}}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>superficie</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarinmueble->superficie}}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>amoblado</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarinmueble->amoblado}}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>descripcion</label>
            <input type="textarea" class="form-control input-lg" value="{{$gestionarinmueble->descripcion}}">
        </div>
    </div>


    <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Actualizar</button>

    <a class="btn btn-lg btn-danger" href="{{route('gestionarinmueble.show',$gestionarinmueble->idInm)}} ">
        <i class="fa fa-trash-o"></i> Cancelar
    </a>
</form>


@endsection