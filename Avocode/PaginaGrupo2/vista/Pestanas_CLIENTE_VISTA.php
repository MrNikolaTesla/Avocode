<?php
session_start();

    if (isset($_SESSION['sesion_iniciada']) && $_SESSION['sesion_iniciada'] == "true") { ?>
        <li class="top-bar"><a href="PAGINA_CartillaVirtual.php">Cartilla Virtual</a></li>
        <li class="top-bar"><a href="PAGINA_MisOrdenes.php">Mis Ordenes</a></li>
        <li class="top-bar"><a href="PAGINA_AltaReservaCliente.php">Crear Reserva</a></li>
        <li class="top-bar"><a href="PAGINA_ModificarPerfilCliente.php?id=<?php echo $_SESSION['id'] ?>">Perfil</a></li>
        <?php if($_SESSION['tipo'] == "administrador" || $_SESSION['tipo'] == "empleado"){ ?>
        <li class="top-bar"><a href="PAGINA_GestionUsuarios.php">Gestores</a></li>
        <?php } ?>
        <li class="top-bar"><a href='controlador/Logout.php'>Logout</a></li>
    <?php } else { ?>
        <li class="top-bar"><a href="PAGINA_CartillaVirtual.php">Cartilla Virtual</a></li>
        <li class="top-bar"><a href="PAGINA_FormularioInicioSesion.php">Iniciar Sesión</a></li>
        <li class="top-bar"><a href="PAGINA_FormularioRegistroCliente.php">Registrar</a></li>
    <?php
    }
?>