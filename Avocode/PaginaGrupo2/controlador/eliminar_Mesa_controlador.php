<?php
require_once("../modelo/Mesa.php");
    $mesa = new Mesa();
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $estado = $mesa->eliminar_mesa($id);

if($estado==1) {
    session_start(); 
    $_SESSION['message'] = 'Mesa eliminada correctamente';
    header("Location: ../PAGINA_GestionMesas.php");
}else{
    session_start(); 
    $_SESSION['message'] = 'No se ha podido eliminar la mesa seleccionada.';
    header("Location: ../PAGINA_GestionMesas.php");
}
}else{
    session_start(); 
    $_SESSION['message'] = 'La mesa seleccionada no existe.';
    header("Location: ../PAGINA_GestionMesas.php");
}

?>