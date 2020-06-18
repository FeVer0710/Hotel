<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> GESTION DE USUARIOS</title>
</head>

<body>
    <form action="buscar.php" method="post" onsubmit="return validar();">
        Buscar por Nombre o Cargo:
        <input type="text" name="criterio" value="<?php echo$criterio; ?>" />
        <input type="submit" value="Buscar" />
        <input type="button" value="Registrar" onclick="location.replace('index.php');" />
        <br>
        <hr><br>
        <table align="center" width="90%" border="1">
            <tr>
                <td>#</td>
                <td>Nombre</td>
                <td>Usuario</td>
                <td>Cargo</td>
                <td>Contraseña</td>
                <td>Acciones</td>
            </tr>
        </table>
    </form>
</body>

</html>