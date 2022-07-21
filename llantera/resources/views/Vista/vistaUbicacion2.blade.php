<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubícanos</title>
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

    <link rel="stylesheet" href="{{asset('css3/ubicacion.css')}}">
    <link rel="stylesheet" href="{{asset('css3/boot.css')}}">
    </link>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #map {
            height: 370px;
            width: 60%;
        }
    </style>
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
    <main>
        <div class="row">
            <div class="row">
                <h1 class="tituloo"> UBÍCANOS </h1>
            </div>
            <div class="row">
                <section class="section espacio">
                    <div class="contenedor-derecho" id="map"></div>

                    <div class="contenedor-izquierdo">
                        <div style="text-align:center"><img src="imagenes/ubicacion.png" class="w-10" /></div>
                        <h4 class=""> Ubicación: Av. Laureles ####, Colonia Unidad Llantera Oaxaca, México. </h4>
                    </div>
                    <div class="contenedor-izquierdo">
                        <div style="text-align:center"><img src="imagenes/reloj01.png" class="w-10" /></div>
                        <h4 class=""> Horario de Atención: Lunes a Viernes de 9:00 a 15:00 hrs </h4>
                    </div>
                    <div class="contenedor-izquierdo">
                        <div style="text-align:center"><img src="imagenes/call.png" class="w-10" /></div>
                        <h4 class=""> Tel: (33) 3836 3434 Fax: (33) 3836 3444 Email: contacto@llantera.com.mx </h4>
                    </div>
                </section>
            </div>
            <div class="row">
                <script>
                    function initMap() {
                        var location = {
                            lat: 17.054230,
                            lng: -96.713226
                        };
                        var map = new google.maps.Map(document.getElementById("map"), {
                            zoom: 4,
                            center: location
                        });
                        var marker = new google.maps.Marker({
                            position: location,
                            map: map
                        });
                    }
                    AIzaSyBl02TQg0bL2KG9mLkgFHWWzSIoVH5vOGs
                </script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBl02TQg0bL2KG9mLkgFHWWzSIoVH5vOGs&callback=initMap">
                </script>
            </div>
        </div>
        <br>
        <br>
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