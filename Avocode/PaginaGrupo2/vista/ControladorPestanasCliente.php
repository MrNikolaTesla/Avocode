<?php
session_start();

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