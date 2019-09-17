@extends('layouts.index')

@section('contenido-titulo')
Tipo de Inmueble
@endsection

@section('contenido-descripcion')
Mostrar Tipo de Inmueble
@endsection

@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('tipoinmueble.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<div class="form-group">
    <div class="row">
        <div class="col-xs-3">
            <label>Nombre</label>
            <input type="text" class="form-control input-lg" value="{{$tipoinmueble->tipoInm}}" readonly>
        </div>
    </div>
</div>


<a class="btn btn-lg btn-primary" href="{{route('tipoinmueble.edit',$tipoinmueble->idTip)}} ">
    <i class="fa fa-edit"></i> Editar
</a>
<form action="{{ route('tipoinmueble.destroy',$tipoinmueble->idTip) }}" method="POST">
    @method('DELETE')
    {{ csrf_field() }}
    <input type="submit" value="Eliminar" class="btn btn-lg btn-danger">

</form>




@endsection