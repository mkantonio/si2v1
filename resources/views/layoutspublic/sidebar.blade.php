<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading">
    {{-- <img src="http://i.imgur.com/xgtNHap.jpg" alt="Smiley face" height="42" width="42"> --}}
    <img src="http://i.imgur.com/xgtNHap.jpg" alt="Inmuebles YA!" width="222">
  </div>
  {{-- https://github.com/mkantonio/si2v1/blob/master/public/assets/login/images/bg-01.jpg --}}

  <div class="list-group list-group-flush">
    {{-- FORMULARIO PARA FILTROS PETICIONES --}}
    {{-- <form action="{{route('peticiones')}}" method="POST">
    @csrf --}}
    {{-- BUTTON PARA FILTRAR --}}
    <button id="boton01" class="btn btn-lg btn-success btn-block" type="submit">Filtrar</button>
    {{-- 1ER SUBMENU --}}
    <a href="#" class="list-group-item list-group-item-action bg-light">Tipo de Oferta</a>
    {{-- <div id="filters"> --}}
    <ul>
      @foreach ($tipooferta as $tipoofertaitem)
      <div class="input-group-text">
        <input name="tipoofertas" value="{{str_replace(' ', '',$tipoofertaitem->tipTran)}}"
          id="{{str_replace(' ', '',$tipoofertaitem->tipTran)}}" class="{{$tipoofertaitem->tipTran}}" type="checkbox">
        {{$tipoofertaitem->tipTran}}
      </div>
      @endforeach
    </ul>
    {{-- </div> --}}

    {{-- 2DO SUBMENU --}}
    <a href="#" class="list-group-item list-group-item-action bg-light">Zona</a>
    <ul>
      @foreach ($zona as $zonaitem)
      <div class="input-group-text">
        <input name="zonas" value="{{str_replace(' ', '',$zonaitem->nombreZon)}}"
          id="{{str_replace(' ', '',$zonaitem->nombreZon)}}" class="{{str_replace(' ', '',$zonaitem->nombreZon)}}"
          type="checkbox">
        {{$zonaitem->nombreZon}}
      </div>
      @endforeach
    </ul>

    {{-- 3ER SUBMENU --}}
    <a href="#" class="list-group-item list-group-item-action bg-light">Tipo de Inmueble</a>
    <ul>
      @foreach ($tipoinmueble as $tipoinmuebleitem)
      <div class="input-group-text">
        <input name="tipoinmuebles" value="{{str_replace(' ', '',$tipoinmuebleitem->tipoInm)}}"
          id="{{str_replace(' ', '',$tipoinmuebleitem->tipoInm)}}"
          class="{{str_replace(' ', '',$tipoinmuebleitem->tipoInm)}}" type="checkbox">
        {{$tipoinmuebleitem->tipoInm}}
      </div>
      @endforeach
    </ul>
    {{-- </form> --}}
  </div>
</div>