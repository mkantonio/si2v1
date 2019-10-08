@extends('layouts.index')

@section('contenido-titulo')
Categoria
@endsection

@section('contenido-descripcion')
Mostrar Categoria
@endsection

@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('categoria.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<div class="form-group">
    <div class="row">
        <div class="col-xs-3">
            <label>Nombre</label>
            <input type="text" class="form-control input-lg" value="{{$categoria->nombreCat}}" readonly>
        </div>
    </div>
</div>


<a class="btn btn-lg btn-primary" href="{{route('categoria.edit',$categoria->idCat)}} ">
    <i class="fa fa-edit"></i> Editar
</a>
<form action="{{ route('categoria.destroy',$categoria->idCat) }}" method="POST">
    @method('DELETE')
    {{ csrf_field() }}
    <input type="submit" value="Eliminar" class="btn btn-lg btn-danger">

</form>




@endsection