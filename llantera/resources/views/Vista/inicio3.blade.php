<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>
        LLatera Zuji
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
                <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('inicio3')}}">
                    <i class="fas fa-home">
                    </i>
                    INICIO
                </a>
            </li>
            <li class="navbar-item active">
                <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('verProducto')}}">
                    VER-PRODUCTOS
                </a>
            </li>
            <li class="navbar-item active">
                <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('verCliente')}}">
                    CLIENTES
                </a>
            </li>
            <li class="navbar-item active">
                <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('AltaEmpleado')}}">
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
            <li class="navbar-item active mr-4">
                <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('registroProducto')}}">
                    REGISTRAR-PRODUCTOS
                </a>
            </li>
            <li class="navbar-item active ml-4">
                <h3 class="text-center text-uppercase font-weight-bold text-warning">Bienvenido</h3>
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

<body>
    <main>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="carousel slide" data-ride="carousel" id="demo">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li class="active" data-slide-to="0" data-target="#demo">
                            </li>
                            <li data-slide-to="1" data-target="#demo">
                            </li>
                            <li data-slide-to="2" data-target="#demo">
                            </li>
                            <li data-slide-to="3" data-target="#demo">
                            </li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img alt="img1" src="imagenes/Promocion1.png" style="width: 100%">
                                </img>
                            </div>
                            <div class="carousel-item">
                                <img alt="img2" src="imagenes/Promocion2.jpg" style="width: 100%">
                                </img>
                            </div>
                            <div class="carousel-item">
                                <img alt="img3" src="imagenes/Promocion3.jpg" style="width: 100%">
                                </img>
                            </div>
                            <div class="carousel-item">
                                <img alt="img4" src="imagenes/Promocion4.jpg" style="width: 100%">
                                </img>
                            </div>
                        </div>
                        <a class="carousel-control-prev" data-slide="prev" href="#demo">
                            <span class="carousel-control-prev-icon">
                            </span>
                        </a>
                        <a class="carousel-control-next" data-slide="next" href="#demo">
                            <span class="carousel-control-next-icon">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-deck" ">
                    <div class=" card">
                    <img alt="..." class="card-img-top img-thumbnail img-fluid" src="imagenes/img1.jpg">
                    <div class="card-body">
                        <h5 class="card-title">
                            Productos
                        </h5>
                        <p class="card-text">
                            Administra y agrega productos con solo un click.
                        </p>
                        <a class="btn btn-primary" href="{{url ('verProducto')}}">
                            Ver productos
                        </a>
                    </div>
                    </img>
                </div>
                <div class="card">
                    <img alt="..." class="card-img-top img-thumbnail img-fluid" src="imagenes/Cliente.jpg">
                    <div class="card-body">
                        <h5 class="card-title">
                            Clientes
                        </h5>
                        <p class="card-text">
                            Consulta y gestiona tus clientes con un click aquí.
                        </p>
                        <a class="btn btn-primary" href="{{url('verCliente')}}">
                            Conocer más
                        </a>
                    </div>
                    </img>
                </div>
                <div class="card">
                    <img alt="..." class="card-img-top img-thumbnail img-fluid" src="imagenes/Empleados.jpg">
                    <div class="card-body">
                        <h5 class="card-title">
                            Empleados
                        </h5>
                        <p class="card-text">
                            Consulta y gestiona tus empleados con un click aquí.
                        </p>
                        <a class="btn btn-primary" href="{{url('AltaEmpleado')}}">
                            Contactar
                        </a>
                    </div>
                    </img>
                </div>

            </div>
        </div>
        </div>
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