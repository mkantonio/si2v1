<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Inmuebles YA!</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/simple-sidebar.css')}} " rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
        {{-- <img src="http://i.imgur.com/xgtNHap.jpg" alt="Smiley face" height="42" width="42"> --}}
        <img src="http://i.imgur.com/xgtNHap.jpg" alt="Inmuebles YA!" width="222">
      </div>
      {{-- https://github.com/mkantonio/si2v1/blob/master/public/assets/login/images/bg-01.jpg --}}

      <div class="list-group list-group-flush">
        <form action="{{route('peticiones')}}" method="POST">
          @csrf
          {{-- BUTTON PARA FILTRAR --}}
          <button class="btn btn-lg btn-success btn-block" type="submit">Filtrar</button>
          <a href="#" class="list-group-item list-group-item-action bg-light">Zona</a>
          <ul>
            @foreach ($zona as $zonaitem)
            <div class="input-group-text">
              <input name="zonas[]" value="{{$zonaitem->idZon}}" type="checkbox"> {{$zonaitem->nombreZon}}
            </div>
            @endforeach
          </ul>
          <a href="#" class="list-group-item list-group-item-action bg-light">Tipo de Inmueble</a>
          <ul>
            @foreach ($tipoinmueble as $tipoinmuebleitem)
            <div class="input-group-text">
              <input name="tipoinmuebles[]" value="{{$tipoinmuebleitem->idTip}}" type="checkbox">
              {{$tipoinmuebleitem->tipoInm}}
            </div>
            @endforeach
          </ul>
          <a href="#" class="list-group-item list-group-item-action bg-light">Tipo de Oferta</a>
        </form>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('inicio')}} ">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            {{-- VER SI NO ESTA LOGEADO EL USUARIO --}}
            @if (!Auth::check() )
            <form method="GET" action="{{route('login')}} " class="form-inline my-2 my-lg-0">
              @csrf
              <button class="btn btn-success my-2 my-sm-0" type="submit">Iniciar Sesión</button>
            </form>
            <form method="GET" action="{{route('register')}} " class="form-inline my-2 my-lg-0">
              @csrf
              <button class="btn btn-warning my-2 my-sm-0" type="submit">Registrarse</button>
            </form>
            @endif
            {{-- VER SI ESTA LOGEADO EL USUARIO --}}
            @if (Auth::check() )
            <form method="POST" action="{{route('logout')}} " class="form-inline my-2 my-lg-0">
              @csrf
              <button class="btn btn-danger my-2 my-sm-0" type="submit">Cerrar Sesión</button>
            </form>
            @endif
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4"> Inmuebles YA! </h1>
        <p>Es una página de publicidad para que puedas vender, alquiler o poner en anticretico diversos inmuelbes, como
          casas, departamentos, oficinas.</p>
        <p>En la parte izquierda podrá elegir los tipos de casas de acuerdo a ciertas caracteristicas</p>
        <p>En la parte de abajo podrá ver algunas casas en diponibles</p>
        {{-- <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional,
          and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the
          menu when clicked.</p> --}}

        {{-- CARDS PARA HACER FOR --}}
        <div class="card" style="width: 18rem;">
          <img src="https://cdn2.infocasas.com.uy/repo/img/5ba1af770e78f_resize.jpg.th810.jpg" class="card-img-top"
            alt="Casa 1">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->


  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js') }} "></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>