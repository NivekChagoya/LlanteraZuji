<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</head>
<body>
    <center><h3>  Alta de cliente</h3></center>
    <form  action="{{ url('AltaClient') }}" method="post">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-6">
                    Nombre: <input type="text"  class="form-control" name="nombre">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Apellido: <input type="text"  class="form-control" name="apellido">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Telefono: <input type="number" maxlength="10" class="form-control" name="telefono">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                Correo: <input type="text"  class="form-control" name="correo">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                Estado: <input type="text"  class="form-control" name="estado">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                Municipio: <input type="text"  class="form-control" name="municipio">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                Ciudad: <input type="text"  class="form-control" name="ciudad">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                Colonia: <input type="text"  class="form-control" name="colonia">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                Calle: <input type="text"  class="form-control" name="calle">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                Numero Exterior: <input type="number"  class="form-control" name="num">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                CP: <input type="number"  class="form-control" name="CP"> 
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                <input type="submit" class="btn btn-primary" name="boton" value="Registrar">
                </div>
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
                            <a class="dropdown-item active" href="{{url ('verCliente')}}">Visualizar</a>
                            <a class="dropdown-item" href="{{url ('verCliente')}}">Editar</a>
                            <a class="dropdown-item" href="{{url ('verCliente')}}">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
          
    </form>
</body>
</html>