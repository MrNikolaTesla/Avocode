<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/styles_inicio.css">
    <title>Pestañas Cliente</title>
</head>
<body>
    <?php

    if (isset($_SESSION['sesion_iniciada']) && $_SESSION['sesion_iniciada'] == "true") { ?>
        <li class="top-bar"><a href="#">Cartilla</a></li>
        <li class="top-bar"><a href="#">Edición Limitada</a></li>
        <li class="top-bar"><a href="#">Editar Perfil</a></li>
        <li class="top-bar"><a href="#">Sobre nosotros</a></li>
        <li class="top-bar"><a href="#">Contacto</a></li>
        <li class="top-bar"><a href='controlador/Logout.php'>Logout</a></li>
    <?php } else { ?>
        <li class="top-bar"><a href="FormularioInicioSesion.php">Iniciar Sesión</a></li>
        <li class="top-bar"><a href="FormularioRegistroCliente.php">Registrar</a></li>
    <?php
    }
    ?>
</body>

</html>