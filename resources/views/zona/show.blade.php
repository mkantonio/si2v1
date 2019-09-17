@extends('layouts.index')

@section('contenido-titulo')
Gestionar Zona
@endsection

@section('contenido-descripcion')
Mostrar Zonas
@endsection

@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('zona.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<div class="form-group">
    <div class="row">
        <div class="col-xs-3">
            <label>Nombre</label>
            <input type="text" class="form-control input-lg" value="{{$zona->nombreZon}}" readonly>
        </div>
    </div>
</div>


<a class="btn btn-lg btn-primary" href="{{route('zona.edit',$zona->idZon)}} ">
    <i class="fa fa-edit"></i> Editar
</a>
<form action="{{ route('zona.destroy',$zona->idZon) }}" method="POST">
    @method('DELETE')
    {{ csrf_field() }}
    <input type="submit" value="Eliminar" class="btn btn-lg btn-danger">

</form>




@endsection