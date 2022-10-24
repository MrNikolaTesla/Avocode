<?php
session_start();
$permisos_del_usuario = $_SESSION['tipo']; 
$_SESSION['sesion_iniciada'] = "true";

if($permisos_del_usuario == "cliente"){
    header("Location: ../index.php");
}else{
    header("Location: ../PAGINA_GestionUsuarios.php");
}

?>