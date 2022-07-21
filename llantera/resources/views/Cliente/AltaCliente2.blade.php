<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>
        Document
    </title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" rel="stylesheet">
    <script crossorigin="anonymous" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
    </script>
    <script crossorigin="anonymous" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
    </script>
    <script crossorigin="anonymous" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" media="screen" rel="stylesheet" />
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/420f914e54.js">
    </script>
    </link>

    </meta>
    </meta>
    </meta>
</head>

<body>
    <nav class="navbar navbar-expand-lg pt-3 pb-3" style="background-color:#164B80">
        <a class="navbar-brand text-white">
            <img alt="logo" src="imagenes/logo.png" style="width:85px; height:60px;">
            </img>
        </a>
        <button class="navbar-toggler" data-target="#Menu" data-toggle="collapse" type="button">
            <span class="navbar-toggle-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="Menu">
            <ul class="navbar-nav mr-auto">
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('inicio')}}">
                        <i class="fas fa-home">
                        </i>
                        INICIO
                    </a>
                </li>
                <li class="navbar-item active text-uppercase font-weight-bold text-warning">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('vistaProductosU')}}">
                        <i class="fab fa-product-hunt">
                        </i>
                        PRODUCTOS
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('vistaQuienes')}}">
                        <i class="fas fa-address-card">
                        </i>
                        ¿QUIENES SOMOS?
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('vistaUbicacion')}}">
                        <i class="fas fa-map-marker-alt">
                        </i>
                        UBICACIÓN
                    </a>
                </li>
            </ul>
        </div>

    </nav>
    <br>
    <form action="{{ url('AltaClient2') }}" method="post">
        @csrf
        <h1 class="text-center" style=" color: #164B80; font-family: Space Ranger Academy;">datos de Registro</h1>

        <div class="container">
            <div class="row">
                <div class="col-6">
                    Nombre:
                    <input class="form-control" name="nombre" required="" type="text">
                    </input>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Apellido:
                    <input class="form-control" name="apellido" required="" type="text">
                    </input>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Telefono:
                    <input minlength="10" maxlength="10" type="text" class="form-control" name="telefono" required="" pattern="[0-9]+" type="text">
                    </input>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Correo:
                    <input minlength="5" maxlength="30" type="text" class="form-control" name="correo" type="text">
                    </input>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Estado:
                    <input minlength="5" maxlength="20" type="text" class="form-control" name="estado" required="" type="text">
                    </input>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Municipio:
                    <input minlength="5" maxlength="20" type="text" class="form-control" name="municipio" required="" type="text">
                    </input>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Ciudad:
                    <input minlength="10" maxlength="20" type="text" class="form-control" name="ciudad" type="text">
                    </input>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Colonia:
                    <input minlength="5" maxlength="20" type="text" class="form-control" name="colonia" type="text">
                    </input>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Calle:
                    <input input minlength="5" maxlength="30" type="text" class="form-control" name="calle" required="" type="text">
                    </input>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Numero Exterior:
                    <input minlength="1" maxlength="5" type="text" class="form-control" name="num" required="" pattern="[0-9]+" type="text">
                    </input>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    CP:
                    <input minlength="5" maxlength="5" class="form-control" name="CP" required="" type="text" pattern="[0-9]+">
                    </input>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    Contraseña:
                    <input class="form-control" name="password" required="" type="password">
                    </input>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <a href="{{url ('inicio')}}">
                        <input class="btn btn-primary" name="boton" type="submit" value="Registrar" />
                    </a>
                </div>
            </div>
            </br>

        </div>

        <div class="row">
            <div class="col-6 ">
                <div style="position: absolute; top: -62px; right: 250px;">
                    <a href="{{url ('inicio')}}">
                        <input class="btn btn-danger" name="Cancelar" value="Cancelar" />
                    </a>
                </div>
            </div>
        </div>
        </br>
    </form>
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
<div class="img-thumbnail" style="position: absolute; top: 190px; right: 90px;">
    <img src="imagenes/Prueba.jpg">
    </img>
</div>