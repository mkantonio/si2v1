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
<div class="form-group">

    <div class="row">
        <div class="col-xs-3">
            <label>idInmueble</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarinmueble->idInm}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>superficie</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarinmueble->superficie}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>amoblado</label>
            <input type="text" class="form-control input-lg" value="{{$gestionarinmueble->amoblado}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>descripcion</label>
            <input type="textarea" class="form-control input-lg" value="{{$gestionarinmueble->descripcion}}" readonly>
        </div>
    </div>


</div>


<a class="btn btn-lg btn-primary" href="{{route('gestionarinmueble.edit',$gestionarinmueble->idInm)}} ">
    <i class="fa fa-edit"></i> Editar
</a>
<form action="{{ route('gestionarinmueble.destroy',$gestionarinmueble->idInm) }}" method="POST">
    @method('DELETE')
    {{ csrf_field() }}
    <input type="submit" value="Eliminar" class="btn btn-lg btn-danger">

</form>




@endsection