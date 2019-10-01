@extends('layouts.index')

@section('contenido-titulo')
Gestionar Método de Pago
@endsection

@section('contenido-descripcion')
Mostrar Métodos de pagos
@endsection

@section('contenido-body')
<a class="btn btn-lg btn-primary" href="{{route('metodopago.index')}} ">
    <i class="fa fa-backward"></i> Volver atrás
</a>
<div class="form-group">
    <div class="row">
        <div class="col-xs-3">
            <label>Nombre</label>
            <input type="text" class="form-control input-lg" value="{{$metodopago->nombre}}" readonly>
        </div>
    </div>
</div>


<div class="form-group">
    <div class="row">
        <div class="col-xs-3">
            <label>Descripcion</label>
            <input type="text" class="form-control input-lg" value="{{$metodopago->descripcion}}" readonly>
        </div>
    </div>
</div>

<a class="btn btn-lg btn-primary" href="{{route('metodopago.edit',$metodopago->idMet)}} ">
    <i class="fa fa-edit"></i> Editar
</a>
<form action="{{ route('metodopago.destroy',$metodopago->idMet) }}" method="POST">
    @method('DELETE')
    {{ csrf_field() }}
    <input type="submit" value="Eliminar" class="btn btn-lg btn-danger">

</form>




@endsection