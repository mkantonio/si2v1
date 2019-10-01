@extends('layouts.index')

@section('contenido-titulo')
Gestionar Metodos de Pago
@endsection

@section('contenido-descripcion')
crear nuevo método de pago
@endsection


@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('metodopago.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<form action="{{route('metodopago.store')}}" method="POST" class="form-group">
    @method('POST')
    @csrf

    <div class="form-group">
        <div class="row">
            <div class="col-xs-3">
                <label>Nombre de método de pago</label>
                <input type="text" name="nombre" class="form-control input-lg" value="">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-xs-3">
                <label>Descripcion</label>
                <input type="text" name="descripcion" class="form-control input-lg" value="">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Crear </button>
</form>


@endsection