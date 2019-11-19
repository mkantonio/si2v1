@extends('layoutspublic.app')

@section('contenido')

<div class="container">
  <div class="row">
    <div class="col-12 col-sm-6 col-md-4">
      <div class="cardcasas">
        @foreach ($publicacion as $pb)
        <div data-id="{{$pb->tipTran}}"
          data-category="{{str_replace(' ', '',$pb->tipTran)}} {{str_replace(' ', '',$pb->nombreZon)}} {{str_replace(' ', '',$pb->tipoInm)}}">
          <div style="width: 18rem;">
            <img src="https://cdn2.infocasas.com.uy/repo/img/5ba1af770e78f_resize.jpg.th810.jpg" class="card-img-top"
              alt="Casa 1">
            <div class="card-body">
              <h5 class="card-title"> <b>{{$pb->nombre}} </b></h5>
              <p class="card-text" style="color:Tomato;">{{$pb->tipTran}}</p>
              <p class="card-text">{{$pb->descripcion}}</p>
              <a href="{{route('publicacion.show',$pb->idPub)}}" class="btn btn-primary">Ver más detalles</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

@endsection