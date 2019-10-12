@extends('layouts.index')


@section('contenido-titulo')
Backup & Restore
@endsection

@section('contenido-descripcion')
página principal de Backup & Restore
@endsection

@section('contenido-body')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Backup & Restore</h3>
    </div>
    <!-- /.box-header -->

    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="btn bg-olive btn-lg" href="{{route('backuprestore.restore')}}" role="button">Restaurar
                        informacion -
                        Restore</a>
                </div>
                <br>
                <div class="col">
                    <a class="btn bg-maroon btn-lg" href="{{route('backuprestore.backup')}}" role="button">Guardar
                        informacion -
                        Backup</a>
                </div>
            </div>
        </div>
        <br>

    </div>


    {{-- <div class="row">
        <div class="col">
            <div class="mx-auto w-50 p-3 bg-dark text-white text-center">

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="mx-auto w-50 p-3 bg-dark text-white text-center">
                <button class="btn bg-maroon btn-lg">
                    Backup
                </button>
            </div>
        </div>
    </div> --}}
    <!-- /.box-body -->
</div>
@endsection

{{-- <div class="col col-sm-4 col-md-2">
            <a href=" {{route ('backuprestore.create')}} " type="button" class="btn btn-block btn-success">Crear</a>
</div> --}}