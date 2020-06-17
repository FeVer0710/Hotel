<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FORMULARIO ECONÓMICA </title>
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
                <div class="col-12 icono-formulario-economica">
                    <img src="imagenes/Economica.jpg" width="50%">
                    <p class="mt-4">¡Capacidad para 1 personas! 
                        Disponible con una cama Individual. Incluye almuerzo y cena 
                        Servicio a la Habitacion Sencilla + Aire Acondicionado. 
                        ¡Todo Por $10 al dia!</p>
                </div>
                <form action="" class="col-12">

                    <div class="form-group" id="nombre-economica">
                        <input type="text" class="form-group" name="nombre" placeholder="Nombre">
                    </div>

                    <div class="form-group" id="apellido-economica">
                        <input type="text" class="form-group" name="apellido" placeholder="Apellido">
                    </div>

                    <div class="form-group" id="numero-economica">
                        <input type="text" class="form-group" maxlength="8" name="numero" placeholder="Número telefónico">
                    </div>

                    <div class="form-group" id="direccion-economica">
                        <input type="text" class="form-group" name="direccion" placeholder="Dirección">
                    </div>

                    <div class="form-group" id="acompanante-economica">
                        <input type="text" class="form-group" name="acompanante" placeholder="Nombre acompañante">
                    </div>

                    <div class="form-group" id="apellido-acompanante-economica">
                        <input type="text" class="form-group" name="apellido-acompanante"
                            placeholder="Apellido acompañante">
                    </div>

                    <div class="form-group" id="servicioC-group">
                        <label for='categoria'>Servicio De Habitacion: </label>
                        <select name='servicio' id='servicio'>
                            <option value='Económica'>Económica</option>
                        </select>
                    </div>
                    <div class="form-group" id="fechaC-group">
                        <label for=""> Fecha De Entrada: </label>
                        <input type="date" class="form-group" id="dateInicio" min="<?php echo date("Y-m-d");?><?php echo date("Y-m-d");?>
                        </div> 
                        <div class=" form-group" id="fechaC-group">
                        <label for=""> Fecha De Salida: </label>
                        <input type="date" class="form-group" id="dateFinal" min="<?php echo date("Y-m-d");?><?php echo date("Y-m-d");?>
                        </div>
                        <div id=""></div>
                        <input type=" text" id="totalaPagar">
                        <input type="button" class="btn" value="Calcular total a pagar" onclick="calcular()"><br><br>
                        <div class="">
                            <button type="submit" class="btn btn-secondary"> <i class="fa fa-check-circle"
                                aria-hidden="true"></i> Reservar
                                Ahora
                            </button><br>
                            <a type="button" class="btn btn-primary mb-5" href="principal.php"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Regresar
                            </a>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function calcular() {
            let fechaInicio = new Date(document.getElementById('dateInicio').value);
            let fechaFinal = new Date(document.getElementById('dateFinal').value);
            let diasdif = fechaFinal.getTime() - fechaInicio.getTime();
            let contarDias = Math.round(diasdif / (1000 * 60 * 60 * 24));
            let totalaPagar = (contarDias * 10)

            document.getElementById('totalaPagar').value = '$' + totalaPagar;
        }
    </script>

</body>

</html>