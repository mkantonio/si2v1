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
            <h1>Registro de una Cita</h1>

            {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif --}}

        <div class="container">
            <div class="row">
                <div class="col-12 col-xs-6 col-sm-6">
                    <form action="{{route('agendarcita.store')}}" method="POST" class="form-group">
                        @method('POST')
                        @csrf


                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Direccion</span>
                            </div>
                            <input type="text" name="direccion" class="form-control" placeholder="Escriba una direccion"
                                aria-label="Superficie en mts2" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Fecha</span>
                            </div>
                            <input id="fecha" type="date" name="fecha" class="form-control" placeholder="Fije una Fecha"
                                aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Hora</span>
                            </div>
                            <input type="time" name="hora" class="form-control" placeholder="Fije una Hora"
                                aria-label="Superficie en mts2" aria-describedby="basic-addon1">
                        </div>

                        <input type="text" name="idUsuario" value="{{Auth::user()->id}}" class="form-control"
                            placeholder="{{Auth::user()->name}}" readonly hidden>
                        <input type="text" name="idPublicacion" value="{{session()->get('idPublicacion')}}"
                            class="form-control" placeholder="idPublicacion" readonly hidden>

                        <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Reservar Cita
                        </button>
                        {{-- <a class="btn btn-danger" href=" {{route('inicio')}} " role="button">Cancelar</a> --}}
                        <a class="btn btn-danger" href="{{route('publicacion.show',session()->get('idPublicacion'))}}"
                            role="
                            button">Cancelar</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->


    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    @include('layoutspublic.footer')


</body>

</html>