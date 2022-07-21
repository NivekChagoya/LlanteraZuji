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
<div class="container-fluid">
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
        </div>    
        <h1 class="text-center" style=" color: #164B80; font-family: Space Ranger Academy;">pagos</h1> 

    
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>
    
        <div class="container">
            <div class="row" style="float: left; width:500px;">
                <div class="col-md-10 ">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            Lista de Clientes en PDF
                            <a href="{{ URL::to('pdf-pago') }}" class="btn btn-danger btn-sm">Crear</a>
                        </div>
                    </div>                        
                </div>
            </div>
        
            <div class="row" style="float: right; width:500px;">
                <div class="col-md-10 col-md-offset-2">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                                Lista de Clientes en formato CSV
                                <a href="{{ URL::to('csv-pago')  }}" class="btn btn-primary btn-sm">Crear</a>
                        </div>
                    </div>                        
                </div>
            </div>
        
        </div>
    
    <br>
        <table class="table" style="margin-bottom: 150px;">
        <thead class="thead-dark">
        <tr>
        <th scope="col">idPago</th>
        <th scope="col">Tipo de pago</th>
        <th scope="col">Titular</th>
        <th scope="col">Tarjeta</th>
        <th scope="col">Fecha de Expiración</th>
        <th scope="col">CCV</th>
        <th scope="col">Banco</th>
        </tr>
        </thead>
        @foreach($forma as $x)
     <tr>
         <td>{{$x->idPago}}</td>
         <td>{{$x->formaPago}}</td>
         <td>{{$x->titular}}</td>
         <td>{{$x->numTarjeta}}</td>
         <td>{{$x->fecha_Exp}}</td>
         <td>{{$x->ccv}}</td>
         <td>{{$x->banco}}</td>
         
    </tr>
    @endforeach
    </table>
    <div class="container-fluid">
            <footer class="navbar navbar-expand-lg navbar-dark text-white pt-4 pb-4" style="background-color:#164B80">
                <div class="container text-center text-md-left">
                    <div class="row text-center text-md-left">
                        <div class="text-center">
                            <a href="#">
                                <i class="fab fa-facebook-f fa-2x mr-4" style="color:white">
                                </i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter fa-2x mr-4" style="color:white">
                                </i>
                            </a>
                            <a href="#">
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
                                Copyright ©2021  - Desarrollado por EQUIPO1. Impulsado por Ivan Cruz
                            </h6>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
</body>
</html>