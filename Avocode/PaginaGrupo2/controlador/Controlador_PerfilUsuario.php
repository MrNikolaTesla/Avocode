<?php
$id_perfil = $_SESSION['id'];
$permiso = $_SESSION['tipo'];
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido']; 
$correo = $_SESSION['correo'];

require_once("vista/PerfilUsuario_view.php");
?>