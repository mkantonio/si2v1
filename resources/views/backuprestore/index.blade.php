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

    <style>
        .btn-file {
            position: relative;
            overflow: hidden;
        }

        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            cursor: inherit;
            display: block;
        }
    </style>

    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="{{route('backuprestore.restore')}}">
                        @method('POST')
                        @csrf
                        {{-- <a class="btn bg-olive btn-lg" href="{{route('backuprestore.restore')}}"
                        role="button">Restaurar
                        informacion - Restore</a> --}}
                        {{-- <input class="btn bg-olive btn-lg " type="file" onchange="this.form.submit()" name="myFile"
                            value="valor"><br><br> --}}
                        <span class="btn bg-olive btn-lg btn-file"> Restaurar Informacion - Restore
                            <input type="file" onchange="this.form.submit()" name="texto" id="texto"><br><br>
                        </span>
                        {{-- <input class="btn bg-olive btn-lg" type="submit" value="Restaurar Informacion - Restore"> --}}
                    </form>
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