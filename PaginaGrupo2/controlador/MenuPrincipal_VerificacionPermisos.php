<link rel="stylesheet" type="text/css" href="../assets/style_menu_principal_admin.css">
<link rel="stylesheet" type="text/css" href="../assets/style_menu_principal_empleado.css">
<link rel="stylesheet" type="text/css" href="../assets/style_menu_principal_cliente.css">
<?php
session_start(); 
$permiso = $_SESSION['tipo'];
$nombre = $_SESSION['nombre'];

if($permiso == "cliente"){
    if($_SESSION['nuevo_ingreso'] == "true"){
        ?><div><?php
        echo "<p class='saludo-cliente'>¡Bienvenido ".$nombre. "!</p><hr size=5 noshade='noshade' color='#000'>";
        ?></div><?php
        $_SESSION['nuevo_ingreso'] = "false";
        }else{
            ?><div><?php
            echo "<li><p class='saludo-cliente'>" . $nombre . "</p></li><hr size=5 noshade='noshade' color='#743535'>";
            ?></div><?php
        }
    echo "<li><a class='boton' href=''>1OpcionCliente</a></li><hr size=5 noshade='noshade' color='#000'>";
    echo "<li><a class='boton' href=''>2OpcionCliente</a></li><hr size=5 noshade='noshade' color='#000'>";
    echo "<li><a class='boton' href=''>3OpcionCliente</a></li><hr size=5 noshade='noshade' color='#000'>";
    echo "<li><a class='boton' href=''>4OpcionCliente</a></li><hr size=5 noshade='noshade' color='#000'>";
    echo "<li><a class='boton' href='../controlador/Logout.php'>Logout</a></li><hr size=5 noshade='noshade' color='#000'>";

 }else if ($permiso == "empleado"){
    if($_SESSION['nuevo_ingreso'] == "true"){
        ?><div><?php
        echo "<p class='saludo-empleado'>¡Bienvenido " . $nombre . "!</p><hr size=5 noshade='noshade' color='#000'>";
        ?></div><?php
        $_SESSION['nuevo_ingreso'] = "false";
        }else{
            ?><div><?php
            echo "<li><p class='saludo-empleado'>" . $nombre . "</p></li><hr size=5 noshade='noshade' color='#743535'>";
            ?></div><?php
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
    ?><div class="menu-nav-admin"><ul><?php
    if($_SESSION['nuevo_ingreso'] == "true"){
        ?><div><?php
        echo "<li><p class='saludo-admin'>¡Bienvenido " . $nombre . "!</p></li><hr size=5 noshade='noshade' color='#743535'>";
        ?></div><?php
    $_SESSION['nuevo_ingreso'] = "false";
    }else{
        ?><div class="div-saludo"><?php
        echo "<li><p class='saludo-admin'>" . $nombre . "</p></li><hr size=5 noshade='noshade' color='#743535'>";
        ?></div><?php
    }
    echo "<li><a class='btn-admin' href='GestionDeUsuarios.php'>Gestor de Usuarios</a></li><hr size=5 noshade='noshade' color='#743535'>";
    echo "<li><a class='btn-admin' href='GestionDeProductos.php'>Gestor de Productos</a></li><hr size=5 noshade='noshade' color='#743535'>";
    echo "<li><a class='btn-admin' href='GestionDeProveedores.php'>Gestor de Proveedores</a></li><hr size=5 noshade='noshade' color='#743535'>";
    echo "<li><a class='btn-admin' href=''>3OpcionAdministrador</a></li><hr size=5 noshade='noshade' color='#743535'>";
    echo "<li><a class='btn-admin' href=''>4OpcionAdministrador</a></li><hr size=5 noshade='noshade' color='#743535'>";
    echo "<li><a class='btn-admin' href='../controlador/Logout.php'>Logout</a></li><hr size=5 noshade='noshade' color='#743535'>";
    ?></ul></div><?php
}
?>
