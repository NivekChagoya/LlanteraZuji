<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <meta content="ie=edge" http-equiv="X-UA-Compatible">
                    <title>
                        Document
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
            </meta>
        </meta>
    </head>
    <body>
        <center>
            <h3 style="color:blue">
                Actualizacion de Datos Usuario
            </h3>
        </center>
        <form action="{{ url('actualizarUser') }}" class="" method="post">
            @csrf
            <br>
                <input name="idUser" type="hidden" value="{{$user->idUser}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                Users:
                                <input class="form-control" name="users" type="text" value="{{$user->users}}">
                                </input>
                            </div>
                        </div>
                        <br>
                            <div class="row">
                                <div class="col-6">
                                    password:
                                    <input class="form-control" name="password" type="text" value="{{$user->password}}">
                                    </input>
                                </div>
                            </div>
                            <br>
                                <div class="row">
                                    <div class="col-6">
                                        rol:
                                        <input class="form-control" name="rol" type="text" value="{{$user->rol}}">
                                        </input>
                                    </div>
                                </div>
                                <br>
                                    <div class="row">
                                        <div class="col-6">
                                            email:
                                            <input class="form-control" name="rol" type="text" value="{{$user->email}}">
                                            </input>
                                        </div>
                                    </div>
                                    <br>
                                        <div class="row">
                                            <div class="col-6">
                                                <input class="btn btn-primary" name="actualizar" type="submit" value="Actualizar">
                                                </input>
                                            </div>
                                        </div>
                                    </br>
                                </br>
                            </br>
                        </br>
                    </div>
                </input>
            </br>
        </form>
    </body>
</html>