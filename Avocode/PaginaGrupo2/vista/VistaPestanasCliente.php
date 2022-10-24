<?php
session_start();

    if (isset($_SESSION['sesion_iniciada']) && $_SESSION['sesion_iniciada'] == "true") { ?>
        <li class="top-bar"><a href="PAGINA_CartillaVirtual.php">Cartilla Virtual</a></li>
        <li class="top-bar"><a href="PAGINA_MisOrdenes.php">Mis Ordenes</a></li>
        <li class="top-bar"><a href="#">Perfil</a></li>
        <li class="top-bar"><a href='controlador/Logout.php'>Logout</a></li>
    <?php } else { ?>
        <li class="top-bar"><a href="FormularioInicioSesion.php">Iniciar Sesión</a></li>
        <li class="top-bar"><a href="FormularioRegistroCliente.php">Registrar</a></li>
    <?php
    }
?>