<!DOCTYPE html>
<html lang="en">

<head>
    @include('layoutspublic.header')
</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        @include('layoutspublic.sidebar')
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                @include('layoutspublic.navbar')
            </nav>

            <div class="container-fluid">
                <h1 class="mt-4"> Inmuebles YA! </h1>
                <p>Es una página de publicidad para que puedas vender, alquiler o poner en anticretico diversos
                    inmuelbes, como
                    casas, departamentos, oficinas.</p>
                <p>En la parte izquierda podrá elegir los tipos de casas de acuerdo a ciertas caracteristicas</p>
                <p>En la parte de abajo podrá ver algunas casas en diponibles</p>
                {{-- <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional,
          and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the
          menu when clicked.</p> --}}

                {{-- CARDS PARA HACER FOR --}}
                @yield('contenido')
            </div>
        </div>
        <!-- /#page-content-wrapper -->


    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    @include('layoutspublic.footer')

</body>

</html>