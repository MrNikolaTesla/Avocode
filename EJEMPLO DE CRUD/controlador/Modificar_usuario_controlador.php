<?php

require_once("../modelo/Modificar_usuario_modelo.php");
session_start();
$_SESSION['mod_usuario'] = $id = $_GET['id'];

$usuarios = new modificar_usuario();

$usuario_modificar = $usuarios->get_data();

require_once("../vista/Modificar_usuario_view.php");

?>