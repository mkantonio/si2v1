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
            <h1>Publicaciones de Usuario</h1>

            {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif --}}

        <a class="btn btn-lg btn-primary" href="{{route('publicacion.show',$publicacion->idPub)}} ">Volver a publicacion
        </a>


        <div class="container-fluid">
            <div class="card-deck">
                {{-- @foreach ($agendarcita as $agendarcitaitem)
                <div class="card bg-light mb-3" style="max-width: 30rem;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">citas</h5>
                            <p class="card-text">Direccion: {{$agendarcitaitem->direccion}}.</p>
                <p class="card-text">Usuario: {{$agendarcitaitem->idUsuario}}.</p>
                <p class="card-text">Fecha de la cita: {{$agendarcitaitem->fecha}}.</p>
                <p class="card-text">Hora de la cita: {{$agendarcitaitem->hora}}.</p>
            </div>
        </div>
    </div>
    @endforeach --}}

    @foreach ($agendarcita as $agendarcitaitem)
    <div class="card bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header">Cita nro: {{$agendarcitaitem->idCi}}</div>
        <div class="card-body">
            {{-- <h5 class="card-title">{{$agendarcitaitem->idCi}}</h5> --}}
            <p class="card-text">Direccion: {{$agendarcitaitem->direccion}}.</p>
            <p class="card-text">Usuario: {{$agendarcitaitem->idUsuario}}.</p>
            <p class="card-text">Fecha de la cita: {{$agendarcitaitem->fecha}}.</p>
            <p class="card-text">Hora de la cita: {{$agendarcitaitem->hora}}.</p>
        </div>
    </div>
    @endforeach

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