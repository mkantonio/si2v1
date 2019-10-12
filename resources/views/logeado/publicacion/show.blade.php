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
        <h1>Detalles de la Publicacion</h1>

        {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif --}}

        <div class="container-fluid">
            {{-- <div class="mx-auto"> --}}
            <div class="row">
                @if (Auth::check())
                    <div class="col-xs-6 col-md-2">
                        <a class="btn btn-lg btn-primary" href="{{route('publicacion.index')}} ">
                            <i class="fa fa-backward"></i> Volver atrás
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        {{-- <form action="{{route('agendarcita.store')}}" method="POST">
                        @method('POST')
                        {{ csrf_field() }}
                        <input type="hidden" name="publicacion" value="{{$publicacion->idPub}}">
                        <input type="submit" value="Realizar una cita" class="btn btn-lg btn-success">
                        </form> --}}
                        <a class="btn btn-lg btn-success" href="{{route('agendarcita.create')}} ">
                            Realizar una cita al inmueble
                        </a>
                    </div>

                    <div class="col-xs-6 col-md-2">
                        <a class="btn btn-primary" href="{{route('agendarcita.mostrar',$publicacion->idPub)}} ">
                            <i class="fa fa-eye"></i> Mostrar todas las citas
                        </a>
                    </div>

                @else
                    <a class="btn btn-lg btn-primary" href="{{route('inicio')}} ">
                        <i class="fa fa-backward"></i> Volver atrás
                    </a>
                @endif
            </div>


            <div class="card text-center">
                <div class="card-header">
                    <h3 class="display-3">{{$publicacion->nombre}}</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$publicacion->nombre}}</h5>
                    <p class="card-text">Descripcion: {{$publicacion->inmueble->descripcion}}</p>
                    <p class="card-text">Precio: {{$publicacion->preVenta}}</p>
                    <p class="card-text">Precio: {{$publicacion->estado}}</p>
                </div>
                <div class="card-footer text-muted">

                    <p>Publicado el: {{$publicacion->fecPub}}</p>
                    <p>Expira el: {{$publicacion->fecExp}}</p>

                </div>



            </div>


{{--            <div class="form-group">--}}


{{--                <div class="row">--}}
{{--                    <div class="col-xs-3">--}}
{{--                        <label>Nombre</label>--}}
{{--                        <input type="text" class="form-control input-lg" value="{{$publicacion->nombre}}" readonly>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xs-3">--}}
{{--                        <label>Precio de Preventa</label>--}}
{{--                        <input type="text" class="form-control input-lg" value="{{$publicacion->preVenta}}" readonly>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xs-3">--}}
{{--                        <label>Fecha publicada</label>--}}
{{--                        <input type="text" class="form-control input-lg" value="{{$publicacion->fecPub}}" readonly>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xs-3">--}}
{{--                        <label>Fecha de expiracion</label>--}}
{{--                        <input type="text" class="form-control input-lg" value="{{$publicacion->fecExp}}" readonly>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xs-3">--}}
{{--                        <label>Estado</label>--}}
{{--                        <input type="text" class="form-control input-lg" value="{{$publicacion->estado}}" readonly>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            {{-- Si esta LOGEADO, MOSTRAR BOTON DE EDITAR Y ELIMINAR --}}
            @if (Auth::check())
                <a class="btn btn-lg btn-primary" href="{{route('publicacion.edit',$publicacion->idPub)}} ">
                    <i class="fa fa-edit"></i> Editar
                </a>
                <form action="{{ route('publicacion.destroy',$publicacion->idPub) }}" method="POST">
                    @method('DELETE')
                    {{ csrf_field() }}
                    <input type="submit" value="Eliminar" class="btn btn-lg btn-danger">
                </form>
            @endif
            {{-- </div> --}}
        </div>
    </div>
    <!-- /#page-content-wrapper -->


</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
@include('layoutspublic.footer')

</body>

</html>
