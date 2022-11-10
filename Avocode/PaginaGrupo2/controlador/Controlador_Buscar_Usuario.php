<?php
if(!empty($_POST["busqueda"])){

$usuario= $_POST["usuario"];

require_once("modelo/Usuario.php");

$usuarios = new Usuario();

$matrizUsuario = $usuarios->buscar_usuarios($usuario);

require_once("vista/Usuarios_VISTA.php");
}
?>