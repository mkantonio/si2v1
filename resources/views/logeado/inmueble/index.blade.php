<!-- Bootstrap core CSS -->
{{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}

<div class="d-flex" id="wrapper">

    <div class="col col-sm-4">
        <!-- Page Content -->
        <div id="page-content-wrapper">

            <h1>Registro de Inmueble</h1>



            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Superficie</span>
                </div>
                <input type="text" name="superficie" class="form-control" placeholder="Superficie en mts2"
                    aria-label="Superficie en mts2" aria-describedby="basic-addon1" required>
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
                <textarea name="descripcion" class="form-control" aria-label="With textarea" required></textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
                </div>
                <select name="categoria" class="custom-select" id="inputGroupSelect01" required>
                    <option selected>Eije una categoria...</option>
                    @foreach ($categoria as $categoriaitem)
                    <option value="{{$categoriaitem->idCat}}"> {{$categoriaitem->nombreCat}} </option>
                    @endforeach
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo de Inmueble</label>
                </div>
                <select name="tipoinmueble" class="custom-select" id="inputGroupSelect01">
                    <option selected>Eije una tipoinmueble...</option>
                    @foreach ($tipoinmueble as $tipoinmuebleitem)
                    <option value="{{$tipoinmuebleitem->idTip}}"> {{$tipoinmuebleitem->tipoInm}} </option>
                    @endforeach
                </select>
            </div>

            {{-- <div class="input-group mb-3">
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
        </div> --}}

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

    </div>
    <!-- /#page-content-wrapper -->
</div>

</div>