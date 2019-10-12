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
            <h1>Registro de una Publicacion Destacada</h1>

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
            <form action="{{route('agendarcita.store')}}" method="POST" class="form-group">
                @method('POST')
                @csrf

                {{-- <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Direccion</span>
                    </div>
                    <input type="text" name="direccion" class="form-control" placeholder="Escriba una direccion"
                        aria-label="Superficie en mts2" aria-describedby="basic-addon1">
                </div> --}}

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Publicacion</label>
                        <select name="idTiOf" class="custom-select" id="inputGroupSelect01">
                            <option selected>Eije una publicacion</option>
                            @foreach ($publicacion as $publicacionitem)
                            <option value="{{$publicacionitem->idPub}}"> {{$publicacionitem->nombre}} dias
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Destacado</label>
                        <select name="idTiOf" class="custom-select" id="inputGroupSelect01">
                            <option selected>Eije un tipo de destacado...</option>
                            @foreach ($destacado as $destacadoitem)
                            <option value="{{$destacadoitem->idD}}"> {{$destacadoitem->dias}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>



                <input type="text" name="idUsuario" value="{{Auth::user()->id}}" class="form-control"
                    placeholder="{{Auth::user()->name}}">
                <input type="text" name="idPublicacion" value="{{session()->get('idPublicacion')}}" class="form-control"
                    placeholder="idPublicacion">

                <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Reservar Cita
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