<?php
    require_once("../modelo/Mesa.php");
    $mesa_mod = new Mesa();
    if(isset($_GET['id'])){

        $id = $_GET['id'];

        $estado = $mesa_mod->update_mesa($id);

if($estado==1) {
    session_start(); 
    $_SESSION['message'] = 'Estado de la mesa modificado correctamente';
    header("Location: ../GestionDeMesas.php");
}else{
    session_start(); 
    $_SESSION['message'] = 'Estado de la mesa no modificado, algo ha fallado.';
    header("Location: ../GestionDeMesas.php");
}
}
?>