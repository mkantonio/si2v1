@extends('layouts.index')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<script>
    scr="https://code.jquery.com/jquery-3.3.1.js"
</script>
<script>
    scr="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"
</script>

@section('contenido-titulo')
Gestionarpublicacion
@endsection

@section('contenido-descripcion')
página principal de Gestionarpublicacion
@endsection

@section('contenido-body')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tabla</h3>
    </div>
    <!-- /.box-header -->

    {{-- <div class="container-fluid">
        <div class="col-sm-2">
            <a href=" {{route ('gestionarpublicacion.create')}} " type="button"
    class="btn btn-block btn-success">Crear</a>
</div>
</div> --}}
<table id="tablausuario" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>idPub</th>
            <th>nombre</th>
            <th>preVenta</th>
            <th>fecPub</th>
            <th>fecExp</th>
            <th>estado</th>
            <th>idInmueble</th>
            <th>idUsuario</th>
            <th>...</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($gestionarpublicacion as $gestionarpublicacionForm)
        <tr>
            <td> {{$gestionarpublicacionForm->idPub}} </td>
            <td>{{$gestionarpublicacionForm->nombre}}</td>
            <td>{{$gestionarpublicacionForm->preVenta}}</td>
            <td>{{$gestionarpublicacionForm->fecPub}}</td>
            <td>{{$gestionarpublicacionForm->fecExp}}</td>
            <td>{{$gestionarpublicacionForm->estado}}</td>
            <td>{{$gestionarpublicacionForm->idInmueble}}</td>
            <td>{{$gestionarpublicacionForm->idUsuario}}</td>
            <td>
                <a class="btn btn-outline-primary"
                    href="{{route('gestionarpublicacion.show', $gestionarpublicacionForm->idPub)}}">
                    <i class="fa fa-eye"></i> Ver más
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>idPub</th>
            <th>nombre</th>
            <th>preVenta</th>
            <th>fecPub</th>
            <th>fecExp</th>
            <th>estado</th>
            <th>idInmueble</th>
            <th>idUsuario</th>
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