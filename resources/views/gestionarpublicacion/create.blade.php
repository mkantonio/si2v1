@extends('layouts.index')

@section('contenido-titulo')
GestionarPublicacion
@endsection

@section('contenido-descripcion')
GestionarPublicacion
@endsection

@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('gestionarpublicacion.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<form action="{{route('gestionarpublicacion.store')}}" method="POST" class="form-group">
    @method('POST')
    @csrf


    <div class="row">
        <div class="col-xs-3">
            <label>nombre</label>
            <input type="text" class="form-control input-lg" name="nombre">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>fecPub</label>
            <input type="text" class="form-control input-lg" name="fecPub">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>fecExp</label>
            <input type="text" class="form-control input-lg" name=" ">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>estado</label>
            <input type="textarea" class="form-control input-lg" name=" ">
        </div>
    </div>


    <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Crear Usuario</button>

    {{-- <a class="btn btn-lg btn-danger" href="{{route('gestionusuario.show',$usuario->id)}} ">
    <i class="fa fa-trash-o"></i> Cancelar
    </a> --}}
</form>


@endsection