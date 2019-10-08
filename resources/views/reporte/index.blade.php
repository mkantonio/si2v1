@extends('layouts.index')

@section('contenido-titulo')
Categoria
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
                {{-- <div class="col-sm-4">
                    <div class="dataTables_length" id="example1_length"><label>Mostrar <select name="example1_length"
                                aria-controls="example1" class="form-control input-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entradas</label></div>
                </div> --}}
                <div class="container-fluid">
                    <div class="col-sm-2">
                        <a href=" {{route ('categoria.create')}} " type="button"
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
                                @foreach ($categoria as $categoriaForm)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$categoriaForm->nombreCat}} </td>
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
                                            href="{{route('categoria.show', $categoriaForm->idCat)}}">
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
                    {{-- <div class="col-sm-5">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10
                            of
                            57 entries</div>
                    </div> --}}
                    {{-- <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled" id="example1_previous"><a href="#"
                                        aria-controls="example1" data-dt-idx="0" tabindex="0">Anterior</a></li>
                                <li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1"
                                        tabindex="0">1</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2"
                                        tabindex="0">2</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3"
                                        tabindex="0">3</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4"
                                        tabindex="0">4</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5"
                                        tabindex="0">5</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6"
                                        tabindex="0">6</a></li>
                                <li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1"
                                        data-dt-idx="7" tabindex="0">Siguiente</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>

            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>



@endsection