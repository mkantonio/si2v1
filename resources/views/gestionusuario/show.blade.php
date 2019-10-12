@extends('layouts.index')

@section('contenido-titulo')
Usuario
@endsection

@section('contenido-descripcion')
Mostrar Usuario
@endsection

@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('gestionusuario.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<div class="form-group">

    <div class="row">
        <div class="col-xs-3">
            <label>Nombre</label>
            <input type="text" class="form-control input-lg" value="{{$usuario->name}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>Apellido</label>
            <input type="text" class="form-control input-lg" value="{{$usuario->apellido}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>Email</label>
            <input type="text" class="form-control input-lg" value="{{$usuario->email}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>Telefono</label>
            <input type="text" class="form-control input-lg" value="{{$usuario->telefono}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <label>Rol</label>
            <input type="text" class="form-control input-lg" value="{{$usuario->rol}}" readonly>
        </div>
    </div>

</div>


<a class="btn btn-lg btn-primary" href="{{route('gestionusuario.edit',$usuario->id)}} ">
    <i class="fa fa-edit"></i> Editar
</a>
<form action="{{ route('gestionusuario.destroy',$usuario->id) }}" method="POST">
    @method('DELETE')
    {{ csrf_field() }}
    <input type="submit" value="Eliminar" class="btn btn-lg btn-danger">

</form>




@endsection
