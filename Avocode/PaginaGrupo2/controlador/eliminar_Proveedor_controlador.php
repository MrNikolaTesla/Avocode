<?php
session_start();
require_once("../modelo/Proveedor.php");
    $proveedor = new Proveedor();
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $estado = $proveedor->eliminar_proveedor($id);

if($estado==1) {
    $_SESSION['message'] = 'Proveedor eliminado correctamente';
    header("Location: ../PAGINA_GestionProveedores.php");
}else{
    $_SESSION['message'] = 'No se ha podido eliminar el proveedor seleccionado.';
    header("Location: ../PAGINA_GestionProveedores.php.php");
}

}else{
    $_SESSION['message'] = 'El proveedor seleccionado no existe.';
    header("Location: ../PAGINA_GestionProveedores.php.php");
}

?>