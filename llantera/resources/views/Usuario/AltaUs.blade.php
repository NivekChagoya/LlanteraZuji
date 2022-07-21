<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
            <title>
            </title>
            <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" rel="stylesheet">
                <script crossorigin="anonymous" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
                </script>
                <script crossorigin="anonymous" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
                </script>
                <script crossorigin="anonymous" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js">
                </script>
            </link>
        </meta>
    </head>
    <body>
        <center>
            <h2 style="color:green">
                Bienvenido a Alta de Usuarios
            </h2>
        </center>
        <form action="{{ url ('AltaUS') }}" class="form-horizontal" method="post">
            <br>
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            Usuario:
                            <input class="form-control" name="users" type="text">
                            </input>
                        </div>
                    </div>
                    <br>
                        <div class="row">
                            <div class="col-6">
                                Password:
                                <input class="form-control" name="password" type="text">
                                </input>
                            </div>
                        </div>
                        <br>
                            <div class="row">
                                <div class="col-6">
                                    Rol:
                                    <input class="form-control" name="rol" type="text">
                                    </input>
                                </div>
                            </div>
                            <br>
                                <div class="row">
                                    <div class="col-6">
                                        Email:
                                        <input class="form-control" name="email" type="text">
                                        </input>
                                    </div>
                                </div>
                                <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <input class="btn btn-success" name="boton" type="submit" value="Registrar">
                                            </input>
                                        </div>
                                    </div>
                                    <br>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="dropdown">
                                                    <button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="dropdownMenu2" type="button">
                                                        Menú de Opciones
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item active" href="{{url ('verUsuario')}}">
                                                            Visualizar
                                                        </a>
                                                        <a class="dropdown-item" href="{{url ('verUsuario')}}">
                                                            Editar
                                                        </a>
                                                        <a class="dropdown-item" href="{{url ('verUsuario')}}">
                                                            Eliminar
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </br>
                                </br>
                            </br>
                        </br>
                    </br>
                </div>
            </br>
        </form>
    </body>
</html>