<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</head>
<body>
    <center><h2 style="color:blue">Bienvenidos a Alta de productos</h2></center>
    <form  class= "form-horizontal" action="{{ url ('AltaP') }}" method="post">
        <br>
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-6">
                    Marca: <input type="text" class="form-control" name="marca">
                </div>
                <div class="col-6">
                    Modelo: <input type="text" class="form-control" name="modelo">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    Rin: <input type="text" class="form-control" name="rin">
                </div>
                <div class="col-6">
                    Ancho: <input type="text" class="form-control"  name="ancho">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    Serie: <input type="text"  class="form-control" name="serie">
                </div>
                <div class="col-6">
                    Indice: <input type="text"  class="form-control" name="indice">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    Stock: <input type="number"  class="form-control" name="stock">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    Precio: <input type="number"  class="form-control" name="precio">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                <input type="submit" class="btn btn-primary" name="boton" value="Registrar">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <div class="dropdown">
                        <button  class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menú de Opciones
                        </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item active" href="{{url ('verProducto')}}">Visualizar</a>
                            <a class="dropdown-item" href="{{url ('verProducto')}}">Editar</a>
                            <a class="dropdown-item" href="{{url ('verProducto')}}">Eliminar</a>
                    </div>
                </div>
        </div>

    </form>
</body>
</html>