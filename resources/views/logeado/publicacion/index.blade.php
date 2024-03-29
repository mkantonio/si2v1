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
        <h1 class="display-2">Mis publicaciones</h1>

        {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif --}}

        @if(isset($destacadopublicacion))
            <div class="container-fluid">
                <div class="row">
                    @foreach ($destacadopublicacion as $destacadopublicacionitem)
                        <div class="col col-sm-4">
                            <div class="card-deck">
                                <div class="card">
                                    <img src="https://cdn2.infocasas.com.uy/repo/img/5ba1af770e78f_resize.jpg.th810.jpg"
                                         class="card-img-top" alt="{{$destacadopublicacionitem->idPuDe}} ">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$destacadopublicacionitem->nombre}}</h5>
                                        <p class="card-text"> descripcion de destacado </p>
                                        <a class="btn btn-primary"
                                           href="{{route('publicacion.show',$destacadopublicacionitem->idPuDe)}} ">
                                            <i class="fa fa-eye"></i> Ver más detalles
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif


        @if(isset($publicaciones))
            <div class="container-fluid">
                <div class="row">
                    @foreach ($publicaciones as $publicacionesitem)
                        <div class="col col-sm-4">
                            <div class="card-deck">
                                <div class="card">
                                    <img src="https://cdn2.infocasas.com.uy/repo/img/5ba1af770e78f_resize.jpg.th810.jpg"
                                         class="card-img-top" alt="{{$publicacionesitem->idPuDe}} ">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$publicacionesitem->nombre}}</h5>
                                        <p class="card-text"> {{$publicacionesitem->inmueble->descripcion}} </p>
                                        <a class="btn btn-primary"
                                           href="{{route('publicacion.show',$publicacionesitem->idPub)}} ">
                                            <i class="fa fa-eye"></i> Ver más detallesu
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
    <!-- /#page-content-wrapper -->


</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
@include('layoutspublic.footer')

</body>

</html>
