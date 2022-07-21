<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de nosotros</title>
    <link>
    <link rel="stylesheet" href="{{asset('css3/quienes.css')}}">
    <link rel="stylesheet" href="{{asset('css3/boot.css')}}">
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
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('inicio2')}}">
                        <i class="fas fa-home">
                        </i>
                        INICIO
                    </a>
                </li>
                <li class="navbar-item active text-uppercase font-weight-bold text-warning">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('vistaProductosU2')}}">
                        <i class="fab fa-product-hunt">
                        </i>
                        PRODUCTOS
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('vistaQuienes2')}}">
                        <i class="fas fa-address-card">
                        </i>
                        ¿QUIENES SOMOS?
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('vistaUbicacion2')}}">
                        <i class="fas fa-map-marker-alt">
                        </i>
                        UBICACIÓN
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
    <div class="modal" id="ex1" style="height: auto position:absolute">
        <h3 class="text-center" style=" color: #164B80; font-family:ROG Fonts;">
            INICIO DE SESION
        </h3>
        <div class="modal-dialog">
            <div class="col-sm-12">
                <div class="modal-content">
                    <br>
                    <div class="col-12 user-img align-items-center">
                        <center>
                            <img class="img-fluid" src="imagenes/avatar.png" />
                        </center>
                    </div>
                    <br>
                    <form class="col-sm-12 text-center" method="POST">
                        @csrf
                        <div class="form-group">
                            <input class="form-control text-center" name="email" placeholder="email" type="text" />
                        </div>
                        <div class="form-group">
                            <input class="form-control text-center" name="password" placeholder="Contraseña" type="password" />
                        </div>
                        <button class="btn btn-primary" style="margin-top: 1%; margin-bottom:3%;" type="submit">
                            Ingresar
                        </button>
                    </form>
                    <div class="col-12 ">
                    </div>
                    <center>
                        <a href="AltaCliente2">
                            ¿Aún no tienes cuenta? Click aquí
                        </a>
                    </center>
                    <br>
                    </br>
                    </br>
                    </br>
                </div>
            </div>
        </div>
    </div>
    <br>
    <main>
        <div>
            <section class="div-con-fondo">
                <div class="container">
                    <h1 class="tituloo"> ¡LAS MEJORES LLANTAS DEL MERCADO! </h1>
                    <h3 class="subtitulo">
                        Para todo tipo de autos, líder en suministro de llantas, refacciones y rines en la región.
                    </h3>
                </div>
            </section>
        </div>
        <div>
            <section class="section border-top iniciocenter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="w3-card-3">
                                <div class="card-body">
                                    <div style="text-align:center"><img src="imagenes/precio.png" class="w-10" />
                                        <p></p>
                                        <p2>
                                            Precios altamente competitivos.
                                        </p2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="w3-card-3">
                                <div class="card-body ">
                                    <div style="text-align:center"><img src="imagenes/tiempo.png" class="w-10" />

                                        <p></p>
                                        <p2>
                                            Tiempos de entrega
                                        </p2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="w3-card-3">
                                <div class="card-body">
                                    <div style="text-align:center"><img src="imagenes/calidad.png" class="w-10" />
                                        <p></p>
                                        <p2>
                                            Calidad en los productos
                                        </p2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="iniciocenter">
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-4 text-center">
                            <h3 class="main-heading">¿Quienes somos?</h3>
                            <div class="underline mx-auto">
                            </div>
                            <h3>
                                En la empresa "llantera", ofrecemos la venta de llantas Somos una empresa dedicada al comercio de llantas, nuestro objetivo es ofrecer al publico mexicano una solución eficiente y sencilla de adquirir llantas en nuestras sucursales ó a través de nuestro sitio web.
                                En conjunto con la empresa FedEX nuestras llantas son entregadas por servicio de paquetería a los diferentes estados de México.
                            </h3>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div>
            <section class="section border-top fondo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-4 text-center">
                            <h3 class="main-heading">Escuche a algunos de nuestros clientes satisfechos:</h3>
                            <div class="underline mx-auto">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="w3-card-4">

                                <div class="card-body">
                                    <h6 class="main-heading">Comentario</h6>
                                    <div class="underline">
                                    </div>
                                    <img src="imagenes/comillas.png" class="w-10" />
                                    <p2>
                                        Estos chicos son profesionales. ¡Sin agenda oculta, sin cargos adicionales!
                                    </p2>

                                    <p></p>
                                    <p1>
                                        -Angeles Florez
                                    </p1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="w3-card-4">

                                <div class="card-body">
                                    <h6 class="main-heading">Comentario</h6>
                                    <div class="underline">
                                    </div>
                                    <img src="imagenes/comillas.png" class="w-10" />
                                    <p2>
                                        Excelente servicio, me gustó el trato recibido.
                                    </p2>

                                    <p></p>
                                    <p1>
                                        -Juan Dominguez
                                    </p1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="w3-card-4">

                                <div class="card-body">
                                    <h6 class="main-heading">Comentario</h6>
                                    <div class="underline">
                                    </div>
                                    <img src="imagenes/comillas.png" class="w-10" />
                                    <p2>
                                        Muy buen servicio, me ayudó con mi vochito.
                                    </p2>

                                    <p></p>
                                    <p1>
                                        -Elvia Torres
                                    </p1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-4 text-center">
                        </div>

                        <div class="col-md-4">
                            <div class="w3-card-4">

                                <div class="card-body">
                                    <h6 class="main-heading">Comentario</h6>
                                    <div class="underline">
                                    </div>
                                    <img src="imagenes/comillas.png" class="w-10" />
                                    <p2>
                                        Gracias por el ayudarme a darle unas hermosas llantas a mi madre.
                                    </p2>

                                    <p></p>
                                    <p1>
                                        -Miguel Perez
                                    </p1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="w3-card-4">

                                <div class="card-body">
                                    <h6 class="main-heading">Comentario</h6>
                                    <div class="underline">
                                    </div>
                                    <img src="imagenes/comillas.png" class="w-10" />
                                    <p2>
                                        Me gustó el servicio, gracias por las llantas de mi hijo.
                                    </p2>

                                    <p></p>
                                    <p1>
                                        -Pablo García
                                    </p1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="w3-card-4">

                                <div class="card-body">
                                    <h6 class="main-heading">Comentario</h6>
                                    <div class="underline">
                                    </div>
                                    <img src="imagenes/comillas.png" class="w-10" />
                                    <p2>
                                        Los productos son excelentes, tienen un nuevo cliente fecuente.
                                    </p2>

                                    <p></p>
                                    <p1>
                                        -Dolores Martínez
                                    </p1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
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