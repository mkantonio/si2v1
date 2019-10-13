{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body> --}}
{{-- <div class="texto"> --}} {{-- para cambiar TEXTO --}}
<div class="container mt-3">
    {{-- <h2>Modal Example</h2>
            <p>The modal "fades in" with the .fade class. Remove this class to remove the animation.</p> --}}

    <!-- Button to Open the Modal -->
    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalText">
                Open modal
            </button> --}}

    <!-- The Modal -->
    <div class="modal fade" id="myModalText">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Cambiar estilos de la pagina</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form id="myform">
                        <div class="form-group">
                            <label for="sel1">Seleccione para cambiar tipo de texto:</label>
                            <select class="form-control" id="fs" name="sellist1">
                                <option value="Arial">Arial</option>
                                <option value="Verdana ">Verdana </option>
                                <option value="Impact ">Impact </option>
                                <option value="Comic Sans MS">Comic Sans MS</option>
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="size">Seleccione para cambiar tamaño de texto:</label>
                            <select class="form-control" id="size" name="size">
                                <option value="7">7</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="color">Seleccione para color de texto:</label>
                            <select class="form-control" id="color" name="color">
                                <option value="red">rojo</option>
                                <option value="green">verde</option>
                                <option value="yellow">amarillo</option>
                            </select>
                            <br>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</div>
{{-- </div> --}} {{-- COMENTADO DIV DE texto --}}
{{-- <script>
    $("#fs").change(function() {
    //alert($(this).val());
    $('.texto').css("font-family", $(this).val());

});
</script> --}}
{{-- 
</body>

</html> --}}