<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->name}}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADERR</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="#"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
      <li><a href="{{route ('categoria.index')}}"><i class="fa fa-key"></i> <span>Gestionar Categorias</span></a></li>
      <li><a href="{{route ('tipooferta.index')}}"><i class="fa fa-key"></i> <span>Gestionar Tipo de ofertas</span></a></li>
      <li><a href="{{route ('tipoinmueble.index')}}"><i class="fa fa-key"></i> <span>Gestionar Tipo de Inmuebles</span></a></li>
      <li><a href="{{route ('zona.index')}}"><i class="fa fa-key"></i> <span>Gestionar Tipo Zonas</span></a></li>
      <li><a href="{{route ('metodopago.index')}}"><i class="fa fa-key"></i> <span>Gestionar Tipo Metodos de Pago</span></a></li>
      {{-- <li><a href="#"><i class="fa fa-key"></i> <span>Acceso</span></a></li>
      <li><a href="#"><i class="fa fa-question-circle"></i> <span>Ayuda</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#">Link in level 2</a></li>
          <li><a href="#">Link in level 2</a></li>
        </ul>
      </li> --}}
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>