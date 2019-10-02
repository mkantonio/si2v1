<!-- Bootstrap core CSS -->
{{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    @include('layoutspublic.header')
</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- Page Content -->
        <div id="page-content-wrapper">

            @include('layoutspublic.navbar')
            <h1>Publicaciones de Usuario</h1>

            <div class="container-fluid">
                <div class="card-deck">
                    {{-- <div class="card" style="width: 18rem;"> --}}
                    @foreach ($rpublicaciones as $publicacionitem)
                    <div class="card">
                        <img src="https://cdn2.infocasas.com.uy/repo/img/5ba1af770e78f_resize.jpg.th810.jpg"
                            class="card-img-top" alt="{{$publicacionitem->nombre}} ">
                        <div class="card-body">
                            <h5 class="card-title">{{$publicacionitem->nombre}}</h5>
                            <p class="card-text">{{$publicacionitem->descripcion}}.</p>
                            <a class="btn btn-primary" href="{{route('publicacion.show',$publicacionitem->idPub)}} ">
                                <i class="fa fa-edit"></i> Ver más detalles
                            </a>
                        </div>
                    </div>
                    @endforeach
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