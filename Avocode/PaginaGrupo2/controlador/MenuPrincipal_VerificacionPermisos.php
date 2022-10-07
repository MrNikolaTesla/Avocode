<link rel="stylesheet" type="text/css" href="../assets/style_menu_principal_admin.css">
<link rel="stylesheet" type="text/css" href="../assets/style_menu_principal_empleado.css">
<link rel="stylesheet" type="text/css" href="../assets/style_menu_principal_cliente.css">

<?php
session_start(); 
$permiso = $_SESSION['tipo'];
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido']; 

require_once("vista/BarraDeNavegacion.php");
?>
