@extends('layouts.index')

@section('contenido-titulo')
Gestion Usuario
@endsection

@section('contenido-descripcion')
Creaación de Usuario
@endsection

@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('gestionusuario.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<form action="{{route('gestionusuario.store')}}" method="POST" class="form-group">
    @method('POST')
    @csrf

    <div class="row">
        <div class="col-xs-3">
            <label>Nombre</label>
            <input type="text" name="name" class="form-control input-lg" value="">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>Apellido</label>
            <input type="text" name="apellido" class="form-control input-lg" value="">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>Email</label>
            <input type="text" name="email" class="form-control input-lg" value="">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>Clave</label>
            <input type="text" name="password" class="form-control input-lg" value="">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>Telefono</label>
            <input type="text" name="telefono" class="form-control input-lg" value="">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>Rol</label>
            <input type="text" name="rol" class="form-control input-lg" value="">
        </div>
    </div>


    <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Crear Usuario</button>

    {{-- <a class="btn btn-lg btn-danger" href="{{route('gestionusuario.show',$usuario->id)}} ">
    <i class="fa fa-trash-o"></i> Cancelar
    </a> --}}
</form>


@endsection