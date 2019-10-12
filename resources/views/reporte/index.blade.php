@extends('layouts.index')

@section('contenido-titulo')
Reporte
@endsection

@section('contenido-descripcion')
página principal Reporte
@endsection

@section('contenido-body')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Reporte</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">

                <div class="col col-sm-4">
                    <form role="form" _lpchecked="1">
                        <div class="form-group">
                            <label>Categoria</label>
                            <select class="form-control">
                                <option value="null"> Selecciona una opción</option>
                                @foreach ($categoria as $categoriaitem)
                                <option value="{{$categoriaitem->idCat}}"> {{$categoriaitem->nombreCat}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="col col-sm-4">
                    <form role="form" _lpchecked="1">
                        <div class="form-group">
                            <label>Publicacion</label>
                            <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
                </div>

                <div class="col col-sm-4">
                    <form role="form" _lpchecked="1">
                        <div class="form-group">
                            <label>Inmueble</label>
                            <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /.box-body -->
</div>



@endsection