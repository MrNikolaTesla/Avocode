<?php
require_once("../modelo/Usuario.php");
    $usuario = new Usuario();
    session_start();

    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $usuario->eliminar_cuenta($id);

    header("Location: Logout.php");
}
?>