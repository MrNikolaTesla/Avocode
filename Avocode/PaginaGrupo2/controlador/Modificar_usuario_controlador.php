<?php

require_once("modelo/Usuario.php");
if(isset($_GET['id'])){

    $id = $_GET['id'];


$usuario_mod = new Usuario();

$usuario_modificar = $usuario_mod->get_data($id);

require_once("vista/Modificar_usuario_view.php");
}
?>