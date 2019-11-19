<!DOCTYPE html>
<html lang="en">

<head>
    @include('layoutspublic.header')
</head>

<body>

    <div class="texto">

        <div class="d-flex" id="wrapper">

            <!-- Sidebar -->
            @include('layoutspublic.sidebar')
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">


                @include('layoutspublic.navbar')


                <div class="container-fluid">
                    <h1 class="mt-4"> Inmuebles YA! </h1>
                    <p>Es una página de publicidad para que puedas vender, alquiler o poner en anticretico diversos
                        inmuelbes, como
                        casas, departamentos, oficinas.</p>
                    <p>En la parte izquierda podrá elegir los tipos de casas de acuerdo a ciertas caracteristicas</p>
                    <p>En la parte de abajo podrá ver algunas casas en diponibles</p>

                    {{-- CARDS PARA HACER FOR --}}
                    @yield('contenido')
                </div>
            </div>
            <!-- /#page-content-wrapper -->


        </div>
        <!-- /#wrapper -->

        <!-- Bootstrap core JavaScript -->
        @include('layoutspublic.footer')

        <script>
            $("#fs").change(function() {
                //alert($(this).val());
                $('.texto').css("font-family", $(this).val());
            });
            $("#size").change(function() {
                $('.texto').css("font-size", $(this).val() + "px");
            });
            $("#color").change(function() {
                $('.texto').css("color", $(this).val());
            });

        </script>



    </div> {{-- para el TEXTO --}}


</body>

</html>