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

        <div class="container-fluid">
            <div class="row">
                @foreach ($publicaciones as $publicacionitem)
                <div class="col col-sm-4">
                    <div class="card-deck">
                        <div class="card">
                            <img src="https://cdn2.infocasas.com.uy/repo/img/5ba1af770e78f_resize.jpg.th810.jpg"
                                class="card-img-top" alt="{{$publicacionitem->nombre}} ">
                            <div class="card-body">
                                <h5 class="card-title">{{$publicacionitem->nombre}}</h5>
                                <p class="card-text"> descripcion del inmueble </p>
                                <a class="btn btn-primary"
                                    href="{{route('publicacion.show',$publicacionitem->idPub)}} ">
                                    <i class="fa fa-eye"></i> Ver más detalles
                                </a>
                            </div>
                        </div>
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