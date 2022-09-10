<?php

require_once("../modelo/Usuarios_modelo.php");

$usuarios = new usuarios_modelo();

$matrizUsuario = $usuarios->get_usuarios();

require_once("../vista/Usuarios_view.php");

?>