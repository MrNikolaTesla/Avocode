<?php
session_start();
$permiso = $_SESSION['tipo'];

if ($permiso == "cliente") {
    echo "<li><a href='1OpcionCliente'><button class='button-40' role='button'>Gestor de Usuarios</a></button>";
    echo "<li><a href='2OpcionCliente'><button class='button-40' role='button'>Gestor de Productos</a></button>";
    echo "<li><a href='3OpcionCliente'><button class='button-40' role='button'>3Opcion Administrador</a></button>";
    echo "<li><a href='4OpcionCliente'><button class='button-40' role='button'>4Opcion Administrador</a></button>";

} else if ($permiso == "empleado") {
    echo "<li><a href='1OpcionEmpleado'><button class='button-40' role='button'>Gestor de Usuarios</a></button>";
    echo "<li><a href='2OpcionEmpleado.php'><button class='button-40' role='button'>Gestor de Productos</a></button>";
    echo "<li><a href='3OpcionEmpleado.php'><button class='button-40' role='button'>3Opcion Administrador</a></button>";
    echo "<li><a href='4OpcionEmpleado.php'><button class='button-40' role='button'>4Opcion Administrador</a></button>";
 
} else {

    echo "<li><a href='GestionDeUsuarios.php'><button class='button-40' role='button'>Gestor de Usuarios</a></button>";
    echo "<li><a href='GestionDeProductos.php'><button class='button-40' role='button'>Gestor de Productos</a></button>";
    echo "<li><a href='3OpcionAdministrador.php'><button class='button-40' role='button'>3Opcion Administrador</a></button>";
    echo "<li><a href='4OpcionAdministrador.php'><button class='button-40' role='button'>4Opcion Administrador</a></button>";
}

?>