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
            <h1>Registro de Inmueble</h1>

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
            <form action="{{route('inmueble.store')}}" method="POST" class="form-group">
                @method('POST')
                @csrf
                {{-- <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nombre</span>
                        </div>
                        <input type="text" name="" class="form-control" placeholder="Nombre" aria-label="Nombre"
                            aria-describedby="basic-addon1">
                    </div> --}}

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Superficie</span>
                    </div>
                    <input type="text" name="superficie" class="form-control" placeholder="Superficie en mts2"
                        aria-label="Superficie en mts2" aria-describedby="basic-addon1">
                </div>

                <div class="form-check form-check-inline">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Amoblado</span>
                    </div>
                    <input class="form-check-input" type="radio" name="amoblado" id="amoblado1" value="1" checked>
                    <label class="form-check-label" for="amoblado1">Si</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="amoblado" id="amoblado2" value="0">
                    <label class="form-check-label" for="amoblado1">No</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" placeholder="Breve descripcion del inmueble">Descripcion</span>
                    </div>
                    <textarea name="descripcion" class="form-control" aria-label="With textarea"></textarea>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
                    </div>
                    <select name="categoria" class="custom-select" id="inputGroupSelect01">
                        <option selected>Eije una categoria...</option>
                        @foreach ($categoria as $categoriaitem)
                        <option value="{{$categoriaitem->idCat}}"> {{$categoriaitem->nombreCat}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Tipo de Oferta</label>
                    </div>
                    <select name="tipooferta" class="custom-select" id="inputGroupSelect01">
                        <option selected>Eije un tipo de oferta...</option>
                        @foreach ($tipooferta as $tipoofertaitem)
                        <option value="{{$tipoofertaitem->idOf}}"> {{$tipoofertaitem->tipTran}}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Zona</label>
                    </div>
                    <select name="zona" class="custom-select" id="inputGroupSelect01">
                        <option selected>Eije una zona...</option>
                        @foreach ($zona as $zonaitem)
                        <option value="{{$zonaitem->idZon}}"> {{$zonaitem->nombreZon}} </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> Guardar Inmueble
                </button>
                <a class="btn btn-danger" href=" {{route('inicio')}} " role="button">Cancelar</a>
            </form>
        </div>
    </div>
    <!-- /#page-content-wrapper -->


    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    @include('layoutspublic.footer')

</body>

</html>