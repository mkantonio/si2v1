@extends('layouts.index')

@section('contenido-titulo')
tipooferta
@endsection

@section('contenido-descripcion')
página principal de Categoría
@endsection

@section('contenido-body')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tabla</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
                <div class="container-fluid">
                    <div class="col-sm-2">
                        <a href=" {{route ('tipooferta.create')}} " type="button"
                            class="btn btn-block btn-success">Crear</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                            aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending"
                                        style="width: 125px;">Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tipooferta as $tipoofertaForm)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$tipoofertaForm->tipTran}} </td>
                                    <td>
                                        <a class="btn btn-outline-primary"
                                            href="{{route('tipooferta.show', $tipoofertaForm->idOf)}}">
                                            <i class="fa fa-eye"></i> Ver más
                                        </a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Nombre</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">

                </div>

            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>



@endsection