@extends('layouts.index')

@section('contenido-titulo')
tipooferta
@endsection

@section('contenido-descripcion')
Mostrar tipooferta
@endsection

@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('categoria.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<div class="form-group">
    <div class="row">
        <div class="col-xs-3">
            <label>Nombre</label>
            <input type="text" class="form-control input-lg" value="{{$tipooferta->tipTran}}" readonly>
        </div>
    </div>
</div>


<a class="btn btn-lg btn-primary" href="{{ route('tipooferta.edit',$tipooferta->idOf) }} ">
    <i class="fa fa-edit"></i> Editar
</a>
<form action="{{ route('tipooferta.destroy',$tipooferta->idOf) }}" method="POST">
    @method('DELETE')
    {{ csrf_field() }}
    <input type="submit" value="Eliminar" class="btn btn-lg btn-danger">

</form>




@endsection