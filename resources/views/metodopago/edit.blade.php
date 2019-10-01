@extends('layouts.index')

@section('contenido-titulo')
Gestionar Metodo de Pago
@endsection

@section('contenido-descripcion')
Editar Metodo de Pago
@endsection

@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('metodopago.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<form action="{{route('metodopago.update',$metodopago->idMet)}}" method="POST" class="form-group">
    @method('PUT')
    @csrf

    <div class="form-group">
        <div class="row">
            <div class="col-xs-3">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control input-lg" value="{{$metodopago->nombre}}">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-xs-3">
                <label>Descripcion</label>
                <input type="text" name="descripcion" class="form-control input-lg" value="{{$metodopago->descripcion}}">
            </div>
        </div>
    </div>



    <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Actualizar </button>

    <a class="btn btn-lg btn-danger" href="{{route('metodopago.show',$metodopago->idMet)}} ">
        <i class="fa fa-trash-o"></i> Cancelar
    </a>
</form>


@endsection