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
            <h1>Registro de Ubicacion</h1>

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
            <form action="{{route('ubicacion.store')}}" method="POST" class="form-group">
                @method('POST')
                @csrf

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">UV</span>
                    </div>
                    <input type="text" name="uv" class="form-control" placeholder="Cantidad"
                        aria-label="Superficie en mts2" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Manzano</span>
                    </div>
                    <input type="text" name="manzano" class="form-control" placeholder="Cantidad"
                        aria-label="Superficie en mts2" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Barrio</span>
                    </div>
                    <input type="text" name="barrio" class="form-control" placeholder="Cantidad"
                        aria-label="Superficie en mts2" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Calle</span>
                    </div>
                    <input type="text" name="calle" class="form-control" placeholder="Cantidad"
                        aria-label="Superficie en mts2" aria-describedby="basic-addon1">
                </div>


                <input type="text" name="idIn" value="{{$ambientee->idInmueble}}" class="form-control"
                    placeholder="{{$ambientee->idInmueble}}">

                <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Guardar Ubicacion
                </button>
                <a class="btn btn-danger" href=" {{route('inicio')}} " role="button">Cancelar</a>
            </form>
        </div>
    </div>
    <!-- /#page-content-wrapper -->


    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    @include('layoutspublic.footer')

</body>

</html>