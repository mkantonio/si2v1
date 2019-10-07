<!-- Bootstrap core CSS -->
{{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    @include('layoutspublic.header')
</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        {{-- @include('layoutspublic.sidebar') --}}
        <!-- /#sidebar-wrapper -->



        <!-- Page Content -->
        <div id="page-content-wrapper">

            @include('layoutspublic.navbar')
            {{-- <div class="mx-auto"> --}}
            <form action="{{route('publicacion.store')}}" method="POST" class="form-group">
                @method('POST')
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <div class="form-group">
                    @include('logeado.inmueble.index')
                </div>

                <div class="form-group">
                    <div class="col col-sm-4">
                        @include('logeado.ambiente.index')
                    </div>
                </div>

                <div class="form-group">
                    <div class="col col-sm-4">
                        @include('logeado.ubicacion.index')
                    </div>
                </div>


                <div class="col col-sm-4">

                    <h1>Registro de Publicacion</h1>


                    <div class="container-fluid">
                        {{-- <form action="{{route('publicacion.store')}}" method="POST" class="form-group">
                        @method('POST')
                        @csrf --}}

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Nombre de Publicacion</span>
                            </div>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre de la publicacion"
                                aria-label="Superficie en mts2" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Costo de Preventa</span>
                            </div>
                            <input type="text" name="preVenta" class="form-control" placeholder="Costo de Preventa"
                                aria-label="Superficie en mts2" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="form-check form-check-inline">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Estado</span>
                                </div>
                                <input class="form-check-input" type="radio" name="estado" id="estado1"
                                    value="disponible" checked>
                                <label class="form-check-label" for="estado1">Disponible</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estado" id="amoblado2"
                                    value="ocupado">
                                <label class="form-check-label" for="estado2">Ocupado</label>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Tipo de Oferta</label>
                                <select name="idTiOf" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Eije un tipo de oferta...</option>
                                    @foreach ($tipooferta as $tipoofertaitem)
                                    <option value="{{$tipoofertaitem->idOf}}"> {{$tipoofertaitem->tipTran}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Tiempo de Vigencia</label>
                                <select name="fecExp" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Eije un tiempo de vigencia de la publicacion...</option>
                                    <option value="7"> 7 dias </option>
                                    <option value="15"> 15 dias </option>
                                    <option value="30"> 30 dias </option>
                                </select>
                            </div>
                        </div>

                        {{-- <input type="hidden" name="idInmueble" value="{{$inmueble->idInm}}" class="form-control"
                        placeholder="{{$inmueble->idInm}}">
                        <input type="hidden" name="idUsuario" value="{{Auth::user()->id}}" class="form-control"
                            placeholder="{{Auth::user()->name}}">

                        <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Publicar
                        </button>
                        <a class="btn btn-danger" href=" {{route('publicacion.index')}} " role="button">Cancelar</a>
                        --}}
                        {{-- </form> --}}
                    </div>

                </div>

                <div class="col col-sm-4">
                    <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Crear </button>
                </div>
            </form>
            {{-- </div> --}}
        </div>
        <!-- /#page-content-wrapper -->




    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    @include('layoutspublic.footer')

</body>

</html>