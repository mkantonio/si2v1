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
<div class="form-group">


    <div class="row">
        <div class="col-xs-3">
            <label>UV</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarubicacion->uv}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>Manzano</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarubicacion->manzano}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>barrio</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarubicacion->barrio}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>calle</label>
            <input type="textarea" class="form-control input-lg" value="{{$gestionarubicacion->calle}}" readonly>
        </div>
    </div>



</div>


<a class="btn btn-lg btn-primary" href="{{route('gestionarubicacion.edit',$gestionarubicacion->idUbic)}} ">
    <i class="fa fa-edit"></i> Editar
</a>
<form action="{{ route('gestionarubicacion.destroy',$gestionarubicacion->idUbic) }}" method="POST">
    @method('DELETE')
    {{ csrf_field() }}
    <input type="submit" value="Eliminar" class="btn btn-lg btn-danger">

</form>




@endsection