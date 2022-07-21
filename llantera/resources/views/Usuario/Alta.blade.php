<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Bienvenidos a alta de usuario</h3>
    <form  action="{{ url('AltaP') }}" method="post">
        @csrf

        Usuario: <input type="text" name="usuario">
        Contraseña: <input type="text" name="password">
        Tipo: <input type="text" name="tipo">
        <input type="submit" name="boton" value="Registrar">
    </form>
</body>
</html>