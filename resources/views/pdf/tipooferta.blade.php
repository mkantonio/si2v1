<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Reporte de Publicaciones por Tipo de Oferta</title>
</head>

<body>
  <h1 class="display-4" style="text-align:center;">Reporte de Publicaciones por Tipo de Oferta</h1>
  <div class="container-fluid">
    <div class="row padding">
      <div class="col-md-12">
        <div class="row">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Id Publicacion</th>
                <th>Nombre</th>
                <th>Pre Venta</th>
                <th>Estado</th>
                <th>Tipo de Oferta</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($publicacion as $publicacionitem)
              <tr>
                <td>{{ $publicacionitem->idPub }}</td>
                <td>{{ $publicacionitem->nombre }}</td>
                <td>{{ $publicacionitem->preVenta }} USD</td>
                <td>{{ $publicacionitem->estado }}</td>

                <td>
                  @foreach ($tipooferta as $tipoofertaitem)
                  @if ($tipoofertaitem->idOf == $publicacionitem->idTiOf)
                  {{$tipoofertaitem->tipTran}}
                  @break
                  @endif
                  @endforeach
                </td>

              </tr>
              @endforeach
            </tbody>

          </table>
          <div class="col-md-12">
       
          </div>
        </div>
      </div>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
      </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
      </script>
</body>

</html>