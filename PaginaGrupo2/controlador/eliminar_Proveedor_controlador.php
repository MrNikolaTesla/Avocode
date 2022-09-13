<?php
require_once("../modelo/eliminar_Proveedor_modelo.php");
    $eliminarProveedor = new Eliminar_proveedor();
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $estado = $eliminarProveedor->eliminar_proveedor($id);

if($estado==1) {
    session_start(); 
    $_SESSION['message'] = 'Proveedor eliminado correctamente';
    header("Location: ../pagina/GestionDeProveedores.php");
}else{
    session_start(); 
    $_SESSION['message'] = 'No se ha podido eliminar el proveedor seleccionado.';
    header("Location: ../pagina/GestionDeProveedores.php");
}

}else{
    session_start(); 
    $_SESSION['message'] = 'El proveedor seleccionado no existe.';
    header("Location: ../pagina/GestionDeProveedores.php");
}

?>