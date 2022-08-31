<?php
session_start(); 
$permiso = $_SESSION['tipo'];

if($permiso == "cliente"){
   echo "<li style='float:left'><a href=''>1OpcionCliente</a></li>";
   echo "<li style='float:left'><a href=''>2OpcionCliente</a></li>";
   echo "<li style='float:left'><a href=''>3OpcionCliente</a></li>";
   echo "<li style='float:left'><a href=''>4OpcionCliente</a></li>";
}else if ($permiso == "empleado"){
    echo "<li style='float:left'><a href=''>1OpcionEmpleado</a></li>";
    echo "<li style='float:left'><a href=''>2OpcionEmpleado</a></li>";
    echo "<li style='float:left'><a href=''>3OpcionEmpleado</a></li>";
    echo "<li style='float:left'><a href=''>4OpcionEmpleado</a></li>";
}else{
    echo "<li style='float:left'><a href='GestionDeUsuarios.php'>Gestor de Usuarios</a></li>";
    echo "<li style='float:left'><a href='GestionDeProductos.php'>Gestor de Productos</a></li>";
    echo "<li style='float:left'><a href=''>3OpcionAdministrador</a></li>";
    echo "<li style='float:left'><a href=''>4OpcionAdministrador</a></li>";
}

?>