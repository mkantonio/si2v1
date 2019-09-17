@extends('layouts.index')

@section('contenido-titulo')
tipooferta
@endsection

@section('contenido-descripcion')
Editar tipooferta
@endsection

@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('tipooferta.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<form action="{{route('tipooferta.update',$tipooferta->idOf)}}" method="POST" class="form-group">
    @method('PUT')
    @csrf

    <div class="form-group">
        <div class="row">
            <div class="col-xs-3">
                <label>Nombre</label>
                <input type="text" name="tipTran" class="form-control input-lg" value="{{$tipooferta->tipTran}}">
            </div>
        </div>
    </div>





    <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Actualizar </button>

    <a class="btn btn-lg btn-danger" href="{{route('tipooferta.show',$tipooferta->idOf)}} ">
        <i class="fa fa-trash-o"></i> Cancelar
    </a>
</form>


@endsection