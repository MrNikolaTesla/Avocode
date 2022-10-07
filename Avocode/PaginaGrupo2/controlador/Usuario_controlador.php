<?php

require_once("modelo/Usuario.php");

$usuarios = new Usuario();

$matrizUsuario = $usuarios->listar_usuarios();

require_once("vista/Usuarios_view.php");

?>