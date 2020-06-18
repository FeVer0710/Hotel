
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Luna Atlanthis </title>
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

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-principal-tab" data-toggle="pill" href="#v-pills-principal" role="tab" aria-controls="v-pills-principal" aria-selected="true">Principal</a>
                    <a class="nav-link" id="v-pills-gestion-usuarios-tab" data-toggle="pill" href="#v-pills-gestion-usuarios" role="tab" aria-controls="v-pills-gestion-usuarios" aria-selected="false">Gestión de usuarios</a>
                    <a class="nav-link" id="v-pills-catalogo-servicios-tab" data-toggle="pill" href="#v-pills-catalogo-servicios" role="tab" aria-controls="v-pills-catalogo-servicios" aria-selected="false">Catálogo de servicios</a>
                    <a class="nav-link" id="v-pills-catalogo-clientes-tab" data-toggle="pill" href="#v-pills-catalogo-clientes" role="tab" aria-controls="v-pills-catalogo-clientes" aria-selected="false">Catálogo de clientes</a>
                    <a class="nav-link" id="v-pills-reporte-servicios-tab" data-toggle="pill" href="#v-pills-reporte-servicios" role="tab" aria-controls="v-pills-reporte-servicios" aria-selected="false">Reporte de servicios</a>
                    <a class="nav-link" id="v-pills-nuevo-usuario-tab" data-toggle="pill" href="#v-pills-nuevo-usuario" role="tab" aria-controls="v-pills-nuevo-usuario" aria-selected="false">Nuevo usuario</a>
                    <a class="nav-link" id="v-pills-cerrar-sesion-tab" data-toggle="pill" href="#v-pills-cerrar-sesion" role="tab" aria-controls="v-pills-cerrar-sesion" aria-selected="false">Cerrar Sesión</a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-principal" role="tabpanel" aria-labelledby="v-pills-principal-tab"><img src="imagenes/logoLA.png" class="fondo" alt="" width="550px" height="550px">
                    </div>
                    <div class="tab-pane fade" id="v-pills-gestion-usuarios" role="tabpanel" aria-labelledby="v-pills-gestion-usuarios-tab">
                            <form action="buscar.php" method="post" onsubmit="return validar();">
                                Buscar por Nombre o Cargo:
                                <input type="text" name="criterio" value="<?php echo $criterio; ?>" />
                                <input type="submit" value="Buscar" />
                                <input type="button" value="Registrar" onclick="location.replace('index.php');" />
                                <br>
                                <hr><br>
                                <img src="imagenes/team.png" class="team-icono" alt="" width="200px" height="150px">
                                </form>
                                <div class="table-responsive mt-5">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Número</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Nombre de acompañante</th>
                                        <th scope="col">Apellido de acompañante</th>
                                        <th scope="col">F. de entrada</th>
                                        <th scope="col">F. de sálida</th>
                                        <th scope="col">Habitación</th>
                                        <th scope="col">Monto Pagado</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                    <tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-catalogo-servicios" role="tabpanel" aria-labelledby="v-pills-catalogo-servicios-tab">

                        <div class="container-fluid">
                            <div class="h4 text-center">
                                <i class="text-blue fa fa-quote-left" aria-hidden="true"></i> El Destino Al Viajar Nunca Es El
                                Lugar, Si No Una Nueva Forma De Ver Las Cosas <i class="text-blue fa fa-quote-right" aria-hidden="true"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mt-5">
                                    <div class="card">
                                        <img src="imagenes/Matrimonial.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><i class="text-blue fa fa-heartbeat" aria-hidden="true"></i>
                                                Matrimonial</h5>
                                            <p class="card-text">¡Capacidad para dos personas!
                                                Disponible con una cama Matrimonial. Incluye almuerzo y cena
                                                Servicio a la Habitacion Premium + Aire acondicionado.
                                                ¡Todo Por $20 al dia!</p>
                                            <a type="button" class="btn btn-primary" href="formularioMatrimomial.php"> <i class="fa fa-check-circle" aria-hidden="true"></i> Reservar ahora
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-5">
                                    <div class="card">
                                        <img src="imagenes/Clásica.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><i class="text-blue fa fa-bath" aria-hidden="true"></i> Clásica
                                            </h5>
                                            <p class="card-text">¡Capacidad para dos personas!
                                                Disponible con una cama Queen Size. Incluye almuerzo y cena
                                                Servicio a la Habitacion Normal + Aire Acondicionado.
                                                ¡Todo Por $15 al dia!</p>
                                            <a type="button" class="btn btn-primary" href="formularioClasica.php"><i class="fa fa-check-circle" aria-hidden="true"></i> Reservar ahora</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-5">
                                    <div class="card">
                                        <img src="imagenes/Economica.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><i class="text-blue fa fa-money" aria-hidden="true"></i>
                                                Económica</h5>
                                            <p class="card-text">¡Capacidad para 1 personas!
                                                Disponible con una cama Individual. Incluye almuerzo y cena
                                                Servicio a la Habitacion Sencilla + Aire Acondicionado.
                                                ¡Todo Por $10 al dia!</p>
                                            <a type="button" class="btn btn-primary" href="formularioEconomica.php"><i class="fa fa-check-circle" aria-hidden="true"></i> Reservar ahora</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-catalogo-clientes" role="tabpanel" aria-labelledby="v-pills-catalogo-clientes-tab">
                            <form action="buscar.php" method="post" onsubmit="return validar();">
                                Buscar por Nombre o Cargo:
                                <input type="text" name="criterio" value="<?php echo $criterio; ?>" />
                                <input type="submit" value="Buscar" />
                                <input type="button" value="Registrar" onclick="location.replace('index.php');" />
                                <br>
                                <hr><br>
                                <img src="imagenes/clientes.png" class="clientes-icono" alt="" width="200px" height="100px">
                            </form>
                            <div class="table-responsive mt-5">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Número</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Nombre de acompañante</th>
                                        <th scope="col">Apellido de acompañante</th>
                                        <th scope="col">F. de entrada</th>
                                        <th scope="col">F. de sálida</th>
                                        <th scope="col">Habitación</th>
                                        <th scope="col">Monto Pagado</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                    <tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    <div class="tab-pane fade" id="v-pills-reporte-servicios" role="tabpanel" aria-labelledby="v-pills-reporte-servicios-tab">
                        1</div>
                    <div class="tab-pane fade" id="v-pills-nuevo-usuario" role="tabpanel" aria-labelledby="v-pills-nuevo-usuario-tab">
                        <div class="modal-dialog text-center">
                            <div class="col-sm-12 main-section">
                                <div class="modal-content">
                                    <div class="col-12 icono-nuevo-usuario">
                                        <img src="imagenes/avatar1.png" width="200px" height="200px">
                                    </div>
                                    <form action="" class="col-12 text-white">
                                        <div class="form-group" id="nombre-nuevo-usuario">
                                            <input type="text" class="form-group" name="nombre" placeholder="Nombre">
                                        </div>
                                        <div class="form-group" id="usuario-nuevo-usuario">
                                            <input type="text" class="form-group" name="usuario" placeholder="Usuario">
                                        </div>
                                        <div class="form-group" id="cargo-nuevo-usuario">
                                            <input type="text" class="form-group" name="cargo" placeholder="Cargo">
                                        </div>
                                        <div class="form-group" id="contrasena-nuevo-usuario">
                                            <input type="password" class="form-group" name="contrasenaUsuario" placeholder="Contraseña de Usuario">
                                        </div>
                                        <button type="submit" class="btn btn-secondary"> <i class="fas fa-sign-in-alt"></i> Registrarse
                                        </button>
                                        <br><br>
                                        <p class="mb-5"> Bienvenido </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-cerrar-sesion" role="tabpanel" aria-labelledby="v-pills-cerrar-sesion-tab">
                        2</div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php


?>