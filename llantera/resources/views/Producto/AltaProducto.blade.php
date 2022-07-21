<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Bienvenidos a alta de producto</h3>
    <form  action="{{ url('AltaProducto') }}" method="post">
        @csrf

        Marca: <input type="text" name="marca">
        Modelo: <input type="text" name="modelo">
        Rin: <input type="text" name="rin">
        Ancho: <input type="text" name="ancho">
        Serie: <input type="text" name="serie">
        Indice: <input type="text" name="indice">
        Stock: <input type="text" name="stock">

        <input type="submit" name="boton" value="Registrar">
    </form>
</body>
</html>