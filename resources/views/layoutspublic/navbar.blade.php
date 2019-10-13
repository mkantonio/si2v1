<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

  <!-- Custom styles for this template -->
  <link href="https://github.com/BlackrockDigital/startbootstrap-simple-sidebar/blob/master/css/simple-sidebar.css"
    rel="stylesheet">


  <button class="btn btn-primary" id="menu-toggle">Menu</button>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      {{-- <ul class="d-flex flex-row-reverse bd-highlight"> --}}
      <li class="nav-item active"> {{--  INICIO --}}
        <a class="nav-link" href="{{route('inicio')}} ">Inicio <span class="sr-only">(current)</span></a>
      </li>


      <li class="nav-item dropdown">
        {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="modal"
          data-target="#myModalText" aria-haspopup="true" aria-expanded="false"> --}}
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="modal" data-target="#myModalText"
          aria-haspopup="true" aria-expanded="false">

          Cambiar estilos


          @include('layoutspublic.modaText')
        </a>
        {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> --}}
      </li>


      {{-- BUTTON PUBLICAR YA VER SI NO ESTA LOGEADO EL USUARIO --}}
      @if (!Auth::check())
      <li class="nav-item">
        <form method="GET" action="{{route('publicacion.create')}} " class="">
          @csrf
          <button class="btn btn-primary" type="submit">Publicar Ya!</button>
        </form>
      </li>
      @endif
      <li class="nav-item">
        {{-- BUTTON PUBLICAR YA VER SI ESTA LOGEADO EL USUARIO --}}
        @if (Auth::check() )
        <form method="GET" action="{{route('publicacion.create')}} " class="">
          @csrf
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Publicar Ya!</button>
        </form>
      </li>
      <li class="nav-item">
        <a class="btn btn-success  my-2 my-sm-0" href="{{route('publicacion.index')}}" role="button">Mis
          Publicaciones</a>
      </li>
      <li class="nav-item my-2 my-sm-0">
        <a class="btn btn-warning  my-2 my-sm-0" href="{{route('destacadopublicacion.index')}}" role="button">Mis
          Destacados</a>
      </li>
      @endif


      {{-- VER SI NO ESTA LOGEADO EL USUARIO --}}
      @if (!Auth::check() )
      <li class="nav-item">
        <form method="GET" action="{{route('login')}} " class="">
          @csrf
          <button class="btn btn-success" type="submit">Iniciar Sesión</button>
        </form>
      </li>
      <li class="nav-item">
        <form method="GET" action="{{route('register')}} " class="">
          @csrf
          <button class="btn btn-warning" type="submit">Registrarse</button>
        </form>
      </li>
      @endif
      {{-- VER SI ESTA LOGEADO EL USUARIO --}}
      @if (Auth::check() )
      <li class="nav-item">
        <form method="POST" action="{{route('logout')}} " class="">
          @csrf
          <button class="btn btn-danger my-2 my-sm-0" type="submit">Cerrar Sesión</button>
        </form>
      </li>
      @endif
    </ul>
  </div>
</nav>