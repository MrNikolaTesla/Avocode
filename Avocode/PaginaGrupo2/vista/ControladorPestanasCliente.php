<?php
session_start();
if (isset($_SESSION['sesion_iniciada']) && $_SESSION['sesion_iniciada'] == "true"){ ?>
    <li><a href="#" class="active">Inicio</a></li>
    <li><a href="#">Cartilla</a></li>
    <li><a href="#">Edición Limitada</a></li>
    <li><a href="#">Sobre nosotros</a></li>
    <li><a href="#">Contacto</a></li>
    <li><a href='controlador/Logout.php'>Logout</a></li>
<?php }else{ ?>
    <li><a href="FormularioInicioSesion.php">Iniciar Sesión</a></li>
    <li><a href="FormularioRegistroCliente.php">Registrar</a></li>
<?php
}
?>