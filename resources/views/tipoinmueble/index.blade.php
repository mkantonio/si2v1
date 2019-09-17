@extends('layouts.index')

@section('contenido-titulo')
Tipo de inmueble
@endsection

@section('contenido-descripcion')
página principal de tipo de inmueble
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
                        <a href=" {{route ('tipoinmueble.create')}} " type="button"
                            class="btn btn-block btn-success">Crear</a>
                    </div>

                    {{-- <div class="col-sm-4">
                        <div class="col offset-sm-4">
                            <div id="example1_filter" class="dataTables_filter"><label>Búsqueda: <input type="search"
                                        class="form-control input-sm" placeholder="" aria-controls="example1"></label>
                            </div>
                        </div>
                    </div> --}}


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
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 156px;">
                                        .</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending"
                                        style="width: 137px;">
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tipoinmueble as $tipoinmuebleForm)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$tipoinmuebleForm->tipoInm}} </td>
                                    {{-- <td>{{$usuarioForm->email}} </td>
                                    <td>{{$usuarioForm->rol_id}} </td> --}}
                                    {{-- <td><a class="btn btn-warning" hre.f="{{route('usuario.edit', $usuarioForm)}}"><span
                                        class="fa fa-eye"></span></a></td> --}}
                                    {{-- <td><a class="btn btn-app"
                                                href="{{route('usuario.edit', $usuarioForm)}}"></a></td> --}}
                                    {{-- <td>
                                        <a class="btn btn-info" href="{{route('usuario.edit', $usuarioForm)}}">
                                    <i class="fa fa-edit"></i> Edit
                                    </a>

                                    </td> --}}
                                    <td>
                                        <a class="btn btn-outline-primary"
                                            href="{{route('tipoinmueble.show', $tipoinmuebleForm->idTip)}}">
                                            <i class="fa fa-eye"></i> Ver más
                                        </a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Nombre</th>
                                    {{-- <th rowspan="1" colspan="1">Email</th>
                                    <th rowspan="1" colspan="1">Rol</th> --}}
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