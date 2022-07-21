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
    <link rel="stylesheet" href="{{asset('css3/boot.css')}}"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css3/estilocard2.css')}}">
    <link rel="stylesheet" href="{{asset('css3/estilocard3.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url ('vistaPrin')}}">home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="{{url ('vistaProductosU')}}">Productos
            <span class="visually-hidden"></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=""></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('vistaQuienes')}}">Quienes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('vistaUbicacion')}}">Ubicación</a>
        </li>
        <li class="nav-item dropdown">
        <button class="btn  dropdown-toggle" style="color:white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Iniciar sesión
        </button>
        <div class="dropdown-menu">
            <form class="px-4 py-3">
                <div class="form-group">
                    <label for="exampleDropdownFormEmail1">Correo electrónico</label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@ejemplo.com">
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Contraseña">
                 </div>
            <a href="{{url ('vistaPrin')}}"><button type="submit" class="btn btn-primary">Iniciar sesión</button></a>
            </form>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="AltaCliente2">¿Aún no tienes cuenta? Click aquí</a>
        </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="card bg-dark text-white">
  <img src="https://cdn.buttercms.com/p9gHxGwjQ3GkzKzBBlRQ" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h2 class="titulo text-center display-1" style=" color: #0F2793; font-family:ROG Fonts;">LLantera Zurita</h2>
  </div>
</div>
<br>
<div class="slider">
        <ul>
            <li>
                <img src="imagenes/Promocion1.png">
            </li>
            <li>
                <img src="imagenes/Promocion2.jpg">
            </li>
            <li>
                <img src="imagenes/Promocion3.jpg">
            </li>
            <li>
                <img src="imagenes/Promocion4.jpg">
            </li>
        </ul>
    </div>
   <br>
    <div class="card-deck" style="position:absolute;left: 1.5%; position:absolute;right: 1.5%;">
  <div class="card">
    <img src="imagenes/img1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Productos</h5>
      <p class="card-text">Puedes disfrutar de las mejores llantas al mejor precio con solo un click.</p>
      <a href="{{url ('vistaProductosU')}}" class="btn btn-primary">Ver productos</a>
    </div>
  </div>
  <div class="card">
    <img src="imagenes/img2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Quienes somos</h5>
      <p class="card-text">¿Te interesa saber más sobre nosotros?, conoce más sobre nosotros aquí.</p>
      <a href="{{url('vistaQuienes')}}" class="btn btn-primary">Conocer más</a>
    </div>
  </div>
  <div class="card">
    <img src="imagenes/img3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Contacto</h5>
      <p class="card-text">Te interesa saber sobre algún producto en específico o te interesa contactarnos.</p>
      <a href="{{url('vistaContactar')}}" class="btn btn-primary">Contactar</a>
      
    </div>
  </div>
</div>

</body>
</html>