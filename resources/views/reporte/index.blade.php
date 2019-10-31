@extends('layouts.index')

@section('contenido-titulo')
Reporte
@endsection

@section('contenido-descripcion')
página principal Reporte
@endsection

<!-- iCheck 1.0.1 -->
<script src="{{asset('js/icheck.min.js') }} "></script>
<script src="{{asset('js/jquery.min.js') }} "></script>

@section('contenido-body')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Reporte</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <form action="{{route('reporte.store')}}" method="POST">
                @method('POST')
                @csrf
                <button class="btn btn-success btn-lg" type="submit">Generar reporte</button>

                <br>
                <br>


                <div class="container">
                    <div class="row">
                        {{-- <div class="col-12 col-sm-6">
                            <label>Precio</label>
                            <br>
                            <div class="form-group">
                                <label for="minimo" class="col-sm-2 control-label">Min</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="minimo" placeholder="minimo USD">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="maximo" class="col-sm-2 control-label">Max</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="maximo" placeholder="maximo USD">
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-12 col-sm-6">
                            <label for="categoria">Categoria</label>
                            <select class="form-control" id="categoria" name="categoria">
                                <option value="">Seleccionar</option>
                                @foreach ($categoria as $c)
                                <option value="{{$c->idCat}}">{{$c->nombreCat}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12 col-sm-6">
                            <label>Tipo de Oferta</label>
                            <select class="form-control" id="inputGroupSelect01" name="oferta">
                                <option value="">Seleccionar</option>
                                @foreach ($tipooferta as $c)
                                <option value="{{$c->idOf}}">{{$c->tipTran}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12 col-sm-6">
                            <label>Estado</label>
                            <select class="form-control" id="inputGroupSelect01" name="estado">
                                <option value="disponible">Disponible</option>
                                <option value="ocupado">Ocupado</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Tipo de Inmueble</label>
                            <select class="form-control" id="inputGroupSelect01" name="tipoinmueble">
                                <option value="">Seleccionar</option>
                                @foreach ($tipoinmueble as $c)
                                <option value="{{$c->idTip}}">{{$c->tipoInm}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12 col-sm-6">
                            <label>Zona</label>
                            <select class="form-control" id="inputGroupSelect01" name="zona">
                                <option value="">Seleccionar</option>
                                @foreach ($zona as $c)
                                <option value="{{$c->idZon}}">{{$c->nombreZon}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- </div> --}}
                        {{-- <div class="row"> --}}
                        <div class="col-12 col-sm-6">
                            <label>Fecha Inicio</label>
                            <input type='date' name='fechainicio' class="form-control" />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Fecha Final</label>
                            <input type='date' name='fechafin' class="form-control" />
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
<!-- /.box-body -->
</div>



@endsection