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
    <center><h2>Lista de Usuarios</h2></center>
    <br>
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">idUsuario</th>
        <th scope="col">Usuario</th>
        <th scope="col">Password</th>
        <th scope="col">Rol</th>
        <th scope="col" colspan="2">Accion</th>
        </tr>
    </thead>
        @foreach($users as $x)
     <tr>|
         <td>{{$x->idUser}}</td>
         <td>{{$x->users}}</td>
         <td>{{$x->password}}</td>
         <td>{{$x->rol}}</td>
         <td><a href="../editarUser/{{$x->idUser}}">Editar</a></td>
         <td><a href="../eliminarUser/{{$x->idUser}}">Eliminar</a></td>|
         
    </tr>
    @endforeach
    </table>
    
</body>
</html>