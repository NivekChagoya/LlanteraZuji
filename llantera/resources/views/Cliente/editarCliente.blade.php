<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edicion Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" media="screen" rel="stylesheet" />
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/420f914e54.js">
    </script>
</head>

<body>

    <nav class="navbar navbar-expand-lg pt-3 pb-3" style="background-color:#164B80">
        <a class="navbar-brand text-white">
            <img alt="logo" src="/imagenes/logo.png" style="width:85px; height:60px;">
            </img>
        </a>
        <button class="navbar-toggler" data-target="#Menu" data-toggle="collapse" type="button">
            <span class="navbar-toggle-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="Menu">
            <ul class="navbar-nav mr-auto">
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('inicio3')}}">
                        <i class="fas fa-home">
                        </i>
                        INICIO
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('verProducto')}}">
                        PRODUCTOS
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('verCliente')}}">
                        CLIENTES
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('verEmpleado')}}">
                        EMPLEADOS
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('verPago')}}">
                        PAGOS
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('verCompra')}}">
                        COMPRAS
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('registroProducto')}}">
                        REGISTRAR-PRODUCTOS
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-text">
            <a class="navbar-text text-white btn btn-danger active" href="{{url ('inicio')}}" type="button">
                <i class="fas fa-sign-out-alt">
                </i>
                Cerrar Sesión
            </a>
        </div>
    </nav>

    <main>
        <h1 class="text-center" style=" color: #164B80; font-family: Space Ranger Academy;">actualizacion del datos del cliente</h1>
        <br>
        <form class="" action="{{ url('actualizarC') }}" method="post">
            @csrf
            <input type="hidden" name="idCliente" value="{{$cliente->idCliente}}">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        Nombre: <input type="text" maxlength="30" class="form-control" name="nombre" value="{{$cliente->nombre}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        Apellido: <input type="text" maxlength="30" class="form-control" name="apellido" value="{{$cliente->apellido}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        Telefono: <input type="text" maxlength="10" class="form-control" pattern="[0-9]+" name="telefono" value="{{$cliente->telefono}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        Correo: <input type="text" maxlength="40" class="form-control" name="correo" value="{{$cliente->correo}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        Estado: <input type="text" maxlength="20" class="form-control" name="estado" value="{{$cliente->estado}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        Municipio: <input type="text" maxlength="20" class="form-control" name="municipio" value="{{$cliente->municipio}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        Ciudad: <input type="text" maxlength="25" class="form-control" name="ciudad" value="{{$cliente->ciudad}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        Colonia: <input type="text" maxlength="20" class="form-control" name="colonia" value="{{$cliente->colonia}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        Calle: <input type="text" maxlength="30" class="form-control" name="calle" value="{{$cliente->calle}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        Num: <input type="text" maxlength="5" class="form-control" pattern="[0-9]+" name="num" value="{{$cliente->numExt}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        CP: <input type="text" maxlength="5" class="form-control" name="CP" pattern="[0-9]+" value="{{$cliente->CP}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <input type="submit" class="btn btn-primary" name="actualizar" value="Actualizar">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 ">
                        <div style="position: absolute; top: -38px; right: 250px;">
                            <a href="{{url ('verCliente')}}">
                                <input class="btn btn-danger" name="Cancelar" value="Cancelar" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <br>
    <footer class="navbar navbar-expand-lg navbar-dark text-white" style="background-color:#164B80">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="text-center">
                    <a href="https://www.facebook.com/groups/432012430552063">
                        <i class="fab fa-facebook-f fa-2x mr-4" style="color:white">
                        </i>
                    </a>
                    <a href="https://twitter.com/IamYanetGarcia">
                        <i class="fab fa-twitter fa-2x mr-4" style="color:white">
                        </i>
                    </a>
                    <a href="https://www.instagram.com/p/CSxJTlpnH7q/?utm_source=ig_web_copy_link">
                        <i class="fab fa-instagram fa-2x mr-4" style="color:white">
                        </i>
                    </a>
                    <h5 class="text-uppercase mb-4 text-warning" style="margin-top:8px; font-family:Times New Roman; font-size:30px;">
                        Llantera Zuji S.A De C.V
                    </h5>
                    <p style="margin-top: 5px;">
                        ¡Tú tranquilo! Porque la capacidad de adaptación de estas llantas es estupenda. Bridgestone
                        es la marca de neumáticos por excelencia de autos como BMW, Mercedes, Ferrari, Audi y Porsche.
                    </p>
                    <h6 class="text-uppercase mb-1 text-warning" style="font-family:Arial; font-size:80%;">
                        Copyright ©2021 - Desarrollado por EQUIPO1.
                    </h6>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>