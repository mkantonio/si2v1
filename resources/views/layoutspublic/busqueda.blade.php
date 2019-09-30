<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">



@foreach ($rpublicaciones as $publicacionitem)
<div class="row">
    <div class="col-sm-3">
        {{-- <div class="card" style="width: 18rem;"> --}}
        <div class="card">
            <img src="https://cdn2.infocasas.com.uy/repo/img/5ba1af770e78f_resize.jpg.th810.jpg" class="card-img-top"
                alt="{{$publicacionitem->nombre}} ">
            <div class="card-body">
                <h5 class="card-title">{{$publicacionitem->nombre}}</h5>
                <p class="card-text">{{$publicacionitem->descripcion}}.</p>
                <a class="btn btn-primary" href="{{route('inicio',$publicacionitem->idPub)}} ">
                    <i class="fa fa-edit"></i> Ver más detalles
                </a>
            </div>
        </div>
    </div>

</div>


@endforeach