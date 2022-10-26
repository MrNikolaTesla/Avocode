<?php
session_start();
if(isset($_GET['id'])){

    $id_a_Modificar = $_GET['id'];

    $id_perfil = $_SESSION['id'];
    $permiso = $_SESSION['tipo'];
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido']; 
    $correo = $_SESSION['correo'];
    $direccion = $_SESSION['direccion'];
    $telefono = $_SESSION['telefono'];
    
    require_once("vista/Modificar_perfil_cliente_view.php");
}
?>