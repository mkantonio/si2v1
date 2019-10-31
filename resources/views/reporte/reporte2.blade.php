{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}

@extends('layouts.index')
<!--font awesome con CDN-->

@section('contenido-titulo')
Reporte
@endsection


@section('contenido-descripcion')
Reporte Personalizado
@endsection

<!-- Bootstrap CSS -->


{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"> --}}





@section('contenido-body')


<br>
<style>
    table th {
        border-radius: 5px;
        background-color: #337ab7 !important;
        color: white;
    }

    table>tbody>tr>td {
        vertical-align: middle !important;
    }
</style>


<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Nombre Publicacion</th>
            <th>Precio de PreVenta</th>
            <th>Estado</th>
            <th>Superf.</th>
            <th>Tipo de Oferta</th>
            <th>Tipo de Inmueble</th>
            <th>Zona</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        @if (count($data)==0)

        <tr>
            <h1 class="display-1 bg-danger text-white"> No hay resultado con los parámetros de búsqueda</h1>
        </tr>
        @endif
        @foreach ($data as $dataitem)
        <tr>
            <td>{{$dataitem->nombre}}</td>
            <td>$us {{$dataitem->preVenta}}</td>
            <td>{{$dataitem->estado}}</td>
            <td>{{$dataitem->superficie}}</td>
            <td>{{$dataitem->tipTran}}</td>
            <td>{{$dataitem->tipoInm}}</td>
            <td>{{$dataitem->nombreZon}}</td>
            <td>{{$dataitem->nombreCat}}</td>
        </tr>
        @endforeach


    </tbody>
    {{-- <tfoot>
        <tr>
            <th>Nombre Publicacion</th>
            <th>Precio de PreVenta</th>
            <th>Estado</th>
            <th>Superf.</th>
            <th>Tipo de Oferta</th>
            <th>Tipo de Inmueble</th>
            <th>Nombre de Zona</th>
            <th>Nombre de Categoria</th>
        </tr>
    </tfoot> --}}
</table>







<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}



@endsection