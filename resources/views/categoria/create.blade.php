@extends('layouts.index')

@section('contenido-titulo')
Categoría
@endsection

@section('contenido-descripcion')
crear Categoría
@endsection


@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('categoria.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<form action="{{route('categoria.store')}}" method="POST" class="form-group">
    @method('POST')
    @csrf

    <div class="form-group">
        <div class="row">
            <div class="col-xs-3">
                <label>Nombre de Categoría</label>
                <input type="text" name="nombreCat" class="form-control input-lg" value="">
            </div>
        </div>
    </div>


    <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Crear </button>

    {{-- <a class="btn btn-lg btn-danger" href="{{route('usuario.show',$usuario)}} ">
    <i class="fa fa-trash-o"></i> Cancelar
    </a> --}}
</form>


@endsection