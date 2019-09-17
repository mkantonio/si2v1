@extends('layouts.index')

@section('contenido-titulo')
Tipo de Inmueble
@endsection

@section('contenido-descripcion')
crear Tipo de Inmueble
@endsection


@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('tipoinmueble.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<form action="{{route('tipoinmueble.store')}}" method="POST" class="form-group">
    @method('POST')
    @csrf

    <div class="form-group">
        <div class="row">
            <div class="col-xs-3">
                <label>Nombre de Categoría</label>
                <input type="text" name="nombre" class="form-control input-lg" value="">
            </div>
        </div>
    </div>


    <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Crear </button>
</form>


@endsection