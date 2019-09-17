@extends('layouts.index')

@section('contenido-titulo')
Tipo de OfertaCategoría
@endsection

@section('contenido-descripcion')
crear Tipo de Oferta
@endsection


@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('tipooferta.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<form action="{{route('tipooferta.store')}}" method="POST" class="form-group">
    @method('POST')
    @csrf

    <div class="form-group">
        <div class="row">
            <div class="col-xs-3">
                <label>Nombre de Tipo de Oferta</label>
                <input type="text" name="tipTran" class="form-control input-lg" value="">
            </div>
        </div>
    </div>


    <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Crear </button>
</form>


@endsection