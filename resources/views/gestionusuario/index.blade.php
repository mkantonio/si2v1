@extends('layouts.index')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<script>
    scr="https://code.jquery.com/jquery-3.3.1.js"
</script>
<script>
    scr="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"
</script>

@section('contenido-titulo')
Gestion Usuario
@endsection

@section('contenido-descripcion')
página principal de Gestion Usuario
@endsection

@section('contenido-body')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tabla</h3>
    </div>
    <!-- /.box-header -->

    <div class="container-fluid">
        <div class="col-sm-2">
            <a href=" {{route ('gestionusuario.create')}} " type="button" class="btn btn-block btn-success">Crear</a>
        </div>
    </div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Tipo</th>
                <th>Telefono</th>
                <th>Rol</th>
                <th>...</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuariosForm)
            <tr>
                <td>
                    @if($usuariosForm->tipo=='p')
                    {{$usuariosForm->name}}
                    @else
                    {{$usuariosForm->nomEmp}}
                    @endif
                </td>
                <td>{{$usuariosForm->email}}</td>
                <td>
                    @if($usuariosForm->tipo=='p')
                    <i class="fa fa-user-o" aria-hidden="true">Persona</i>
                    @else
                    <i class="fa fa-building" aria-hidden="true">Empresa</i>
                    @endif
                </td>
                <td>{{$usuariosForm->telefono}}</td>

                <td>
                    @if($usuariosForm->rol=='a')
                    <i class="fa fa-key font-weight-bold text-danger" aria-hidden="true">Administrador</i>
                    @else
                    Usuario Normal
                    @endif
                </td>

                <td>
                    <a class="btn btn-outline-primary" href="{{route('gestionusuario.show', $usuariosForm->id)}}">
                        <i class="fa fa-eye"></i> Ver más
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Tipo</th>
                <th>Telefono</th>
                <th>Rol</th>
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