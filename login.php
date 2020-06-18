<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LOGIN | INICIAR SESION </title>
    <!--Codigo de Bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <!-- Fin - Codigo de Bootstrap-->
</head>

<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-12 main-section text-white">
            <div class="modal-content">
                <div class="col-12 icono-img">
                    <img src="imagenes/avatar.png" width="200px" height="200px">
                </div>
                <form action="" class="col-12">
                    <div class="form-group" id="usuario-group">
                        <input type="text" class="form-group" name="nombreUsuario" placeholder="Nombre de Usuario">
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-group" name="contrasenaUsuario"
                            placeholder="Contraseña de Usuario">
                    </div>
                    <button type="submit" class="btn btn-secondary"> <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                    </button>
                    <br><br>
                    <p class="mb-5"> Bienvenido </p>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
<?php


?>