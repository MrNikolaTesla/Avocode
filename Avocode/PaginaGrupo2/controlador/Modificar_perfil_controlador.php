<?php

require_once("modelo/Usuario.php");
if(isset($_GET['id'])){

    $id = $_GET['id'];

$perfil_mod = new Usuario();

$perfil_modificar = $perfil_mod->get_data($id);

require_once("vista/Modificar_perfil_view.php");
}
?>