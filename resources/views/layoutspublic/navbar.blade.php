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
        {{-- BUTTON PUBLICAR YA VER SI NO ESTA LOGEADO EL USUARIO --}}
        @if (!Auth::check())
        <form method="GET" action="{{route('inmueble.index')}} " class="form-inline my-2 my-lg-0">
          @csrf
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Publicar Ya!</button>
        </form>
        @endif
        {{-- BUTTON PUBLICAR YA VER SI ESTA LOGEADO EL USUARIO --}}
        @if (Auth::check() )
        <form method="GET" action="{{route('inmueble.index')}} " class="form-inline my-2 my-lg-0">
          @csrf
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Publicar Ya!</button>
        </form>
      </li>
      <li class="nav-item">
        <a class="btn btn-success" href="{{route('publicacion.index')}}" role="button">Mis Publicaciones</a>
      </li>


      @endif

      {{-- <li class="nav-item dropdown">
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
      </li> --}}


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