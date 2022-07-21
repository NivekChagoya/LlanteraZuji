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
     <script crossorigin="anonymous" src="https://kit.fontawesome.com/420f914e54.js"></script>
</head>
<body>
<center><h3>Reporte de Productos dados de alta en el sistema</h3></center>
        <br>
        
        <table class="table table-striped" id="tabla" name="tabla" width="600" border="2" cellspacing="3" cellpadding="3" style="margin:auto; text-align:center;">
        <thead class="">
        <tr style="text-align:center;">
        <th scope="col">IdProducto</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Rin</th>
        <th scope="col">Ancho</th>
        <th scope="col">Serie</th>
        <th scope="col">IndiceVelocidad</th>
        <th scope="col">Stock</th>
        <th scope="col">Precio</th>
        </tr>
        </thead>
        @foreach($nombre as $x)
     <tr>
         
         <td>{{$x->idProducto}}</td>
         <td>{{$x->marca}}</td>
         <td>{{$x->modelo}}</td>
         <td>{{$x->rin}}</td>
         <td>{{$x->ancho}}</td>
         <td>{{$x->serie}}</td>
         <td>{{$x->indiceVel}}</td>
         <td>{{$x->stock}}</td>
         <td>{{$x->precio}}</td>
    </tr>
    @endforeach
    </table >
</body>
</html>