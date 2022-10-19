<?php
session_start(); 
    require_once("../modelo/Mesa.php");
    $mesa_mod = new Mesa();
    if(isset($_GET['id'])){

        $id = $_GET['id'];

        $estado = $mesa_mod->update_mesa($id);

if($estado==1) {
    $_SESSION['message'] = 'Estado de la mesa modificado correctamente';

    header("Location: ../PAGINA_GestionMesas.php");
}else{
    $_SESSION['message'] = 'Estado de la mesa no modificado, algo ha fallado.';
    header("Location: ../PAGINA_GestionMesas.php");
}
}
