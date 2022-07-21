<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Productos</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" rel="stylesheet">
    <script crossorigin="anonymous" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
    </script>
    <script crossorigin="anonymous" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"> </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" rel="stylesheet" />
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/420f914e54.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
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
                    <form class="col-sm-12 text-center">
                        <div class="form-group">
                            <input class="form-control text-center" name="username" placeholder="Nombre de usuario" type="text" />
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
        <div class="card">
            <div class="card-header">
                <span><i class="bi bi-table me-2" style="font-size:large;"></i></span> LISTADO DE PRODUCTOS
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped data-table text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">
                                    Marca
                                </th>
                                <th scope="col">
                                    Modelo
                                </th>
                                <th scope="col">
                                    Rin
                                </th>
                                <th scope="col">
                                    Ancho
                                </th>
                                <th scope="col">
                                    Serie
                                </th>
                                <th scope="col">
                                    Indice de velocidad
                                </th>
                                <th scope="col">
                                    Stock
                                </th>
                                <th scope="col">
                                    Precio </th>
                                <th scope="col">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        @foreach($nombre as $x)
                        <tr>
                            <td>
                                {{$x->marca}}
                            </td>
                            <td>
                                {{$x->modelo}}
                            </td>
                            <td>
                                {{$x->rin}}
                            </td>
                            <td>
                                {{$x->ancho}}
                            </td>
                            <td>
                                {{$x->serie}}
                            </td>
                            <td>
                                {{$x->indiceVel}}
                            </td>
                            <td>
                                {{$x->stock}}
                            </td>
                            <td>${{$x->precio}} MXM</td>
                            <td>
                                <a href="{{url ('compraUsuario')}}">
                                    <input class="btn btn-warning text-white" name="boton" type="submit" value="Comprar" />
                                </a>
                                <a href="#ex2" rel="modal:open">
                                    <input class="btn btn-primary" name="boton1" type="botton" value="Ver Imagen" />
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
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
    <div class="modal" id="ex2" style="height: 70%">
        <h2 class="text-center">
            Llanta
        </h2>
        <div>
            <img alt="Chania" class="mx-auto d-block" src="imagenes/llanta1.jpg" style="width: 60%; height: 60%;">
            </img>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#example').dataTable({
            "dom": 'T<"clear">lfrtip',
            "tableTools": {
                "sSwfPath": "/swf/copy_csv_xls_pdf.swf"
            }
        });
    });
</script>

</html>