@extends('layouts.index')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<script>
    scr="https://code.jquery.com/jquery-3.3.1.js"
</script>
<script>
    scr="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"
</script>

@section('contenido-titulo')
GestionarUbicacion
@endsection

@section('contenido-descripcion')
GestionarUbicacion
@endsection

@section('contenido-body')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tabla</h3>
    </div>
    <!-- /.box-header -->

    {{-- <div class="container-fluid">
        <div class="col-sm-2">
            <a href=" {{route ('gestionarubicacion.create')}} " type="button"
    class="btn btn-block btn-success">Crear</a>
</div>
</div> --}}
<table id="tablausuario" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>idUbic</th>
            <th>uv</th>
            <th>manzano</th>
            <th>barrio</th>
            <th>calle</th>
            <th>...</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($gestionarubicacion as $gestionarubicacionForm)
        <tr>
            <td> {{$gestionarubicacionForm->idUbic}} </td>
            <td>{{$gestionarubicacionForm->uv}}</td>
            <td>{{$gestionarubicacionForm->manzano}}</td>
            <td>{{$gestionarubicacionForm->barrio}}</td>
            <td>{{$gestionarubicacionForm->calle}}</td>
            <td>
                <a class="btn btn-outline-primary"
                    href="{{route('gestionarubicacion.show', $gestionarubicacionForm->idUbic)}}">
                    <i class="fa fa-eye"></i> Ver más
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>idUbic</th>
            <th>uv</th>
            <th>manzano</th>
            <th>barrio</th>
            <th>calle</th>
            <th>...</th>
        </tr>
    </tfoot>
</table>
<!-- /.box-body -->
</div>
<script>
    $(document).ready(function () {
            $('#example').DataTable();
        });
</script>




@endsection