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
<h1 class="text-center" style=" color: #164B80; font-family: Space Ranger Academy;">datos de pago</h1>
    <br>
    <form class= "form-horizontal" action="{{ url ('AltaPA') }}" method="post">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-6">
                    Forma de pago: <input type="text" class="form-control" name="forma">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Tombre que aparece en la tarjeta: <input type="text" class="form-control" name="titular">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Numero de tarjeta: <input type="text" class="form-control" name="numero">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Fecha de expiración MM/YY: <input type="text" class="form-control" name="fecha">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    CCV: <input type="number" class="form-control" name="ccv">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Banco: <input type="text" class="form-control" name="banco">
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
                            <a class="dropdown-item active" href="{{url ('verPago')}}">Visualizar</a>
                    </div>
                </div>
        </div>
        
    </form>
    <div style="position: absolute; top: 90px; right: 90px;" class="img-thumbnail">
    <img src="imagenes/PagoImg2.jpg" >
    </div>
</body>
</html>