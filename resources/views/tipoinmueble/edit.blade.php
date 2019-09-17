@extends('layouts.index')

@section('contenido-titulo')
Tipo de Inmueble
@endsection

@section('contenido-descripcion')
Editar Tipo de Inmueble
@endsection

@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('tipoinmueble.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<form action="{{route('tipoinmueble.update',$tipoinmueble->idTip)}}" method="POST" class="form-group">
    @method('PUT')
    @csrf

    <div class="form-group">
        <div class="row">
            <div class="col-xs-3">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control input-lg" value="{{$tipoinmueble->tipoInm}}">
            </div>
        </div>
    </div>





    <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Actualizar </button>

    <a class="btn btn-lg btn-danger" href="{{route('tipoinmueble.show',$tipoinmueble->idTip)}} ">
        <i class="fa fa-trash-o"></i> Cancelar
    </a>
</form>


@endsection