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
        <h1>Publicaciones Destacadas de Usuario</h1>
        <a class="btn btn-success" href="{{route('destacadopublicacion.create')}} ">
            <i class="fa fa-eye"></i> Crear publicacion destacada
        </a>
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
        @else
            <h2 class="display-2"> Todavía no tienes publicaciones</h2>
        @endif


    </div>
    <!-- /#page-content-wrapper -->


</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
@include('layoutspublic.footer')

</body>

</html>
