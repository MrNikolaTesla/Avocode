<?php
session_start(); 
$permiso = $_SESSION['tipo'];
$nombre = $_SESSION['nombre'];

if($permiso == "cliente"){
    if($_SESSION['nuevo_ingreso'] == "true"){
        echo "Bienvenido ".$nombre. "!";
        $_SESSION['nuevo_ingreso'] = "false";
        }
    echo "<li><a class='boton' href=''>1OpcionCliente</a></li><hr size=5 noshade='noshade' color='#000'>";
    echo "<li><a class='boton' href=''>2OpcionCliente</a></li><hr size=5 noshade='noshade' color='#000'>";
    echo "<li><a class='boton' href=''>3OpcionCliente</a></li><hr size=5 noshade='noshade' color='#000'>";
    echo "<li><a class='boton' href=''>4OpcionCliente</a></li><hr size=5 noshade='noshade' color='#000'>";
    echo "<li><a class='boton' href='../controlador/Logout.php'>Logout</a></li><hr size=5 noshade='noshade' color='#000'>";

 }else if ($permiso == "empleado"){
    if($_SESSION['nuevo_ingreso'] == "true"){
        echo "Bienvenido ".$nombre. "!";
        $_SESSION['nuevo_ingreso'] = "false";
        }
    echo "<li><a class='boton' href='GestionDeUsuarios.php'>Gestor de Usuarios</a></li><hr size=5 noshade='noshade' color='#000'>";
    echo "<li><a class='boton' href=''>2OpcionEmpleado</a></li><hr size=5 noshade='noshade' color='#000'>";
    echo "<li><a class='boton' href=''>3OpcionEmpleado</a></li><hr size=5 noshade='noshade' color='#000'>";
    echo "<li><a class='boton' href=''>4OpcionEmpleado</a></li><hr size=5 noshade='noshade' color='#000'>";
    echo "<li><a class='boton' href='../controlador/Logout.php'>Logout</a></li><hr size=5 noshade='noshade' color='#000'>";

}else{
    /* echo "<li style='float:left'><a href='GestionDeUsuarios.php'>Gestor de Usuarios</a></li>";
    echo "<li style='float:left'><a href='GestionDeProductos.php'>Gestor de Productos</a></li>";
    echo "<li style='float:left'><a href=''>3OpcionAdministrador</a></li>";
    echo "<li style='float:left'><a href=''>4OpcionAdministrador</a></li>"; */
    if($_SESSION['nuevo_ingreso'] == "true"){
    echo "Bienvenido ".$nombre. "!";
    $_SESSION['nuevo_ingreso'] = "false";
    }
    echo "<li><a class='boton' href='GestionDeUsuarios.php'>Gestor de Usuarios</a></li><hr size=5 noshade='noshade' color='#000'>";
    echo "<li><a class='boton' href='GestionDeProductos.php'>Gestor de Productos</a></li><hr size=5 noshade='noshade' color='#000'>";
    echo "<li><a class='boton' href='GestionDeProveedores.php'>Gestor de Proveedores</a></li><hr size=5 noshade='noshade' color='#000'>";
    echo "<li><a class='boton' href=''>3OpcionAdministrador</a></li><hr size=5 noshade='noshade' color='#000'>";
    echo "<li><a class='boton' href=''>4OpcionAdministrador</a></li><hr size=5 noshade='noshade' color='#000'>";
    echo "<li><a class='boton' href='../controlador/Logout.php'>Logout</a></li><hr size=5 noshade='noshade' color='#000'>";
}
?>