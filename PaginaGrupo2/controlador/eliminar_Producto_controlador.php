<?php
require_once("../modelo/eliminar_Producto_modelo.php");
    $eliminarProducto = new Eliminar_producto();
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $estado = $eliminarProducto->eliminar_producto($id);

if($estado==1) {
    session_start(); 
    $_SESSION['message'] = 'Producto eliminado correctamente';
    header("Location: ../pagina/GestionDeProductos.php");
}else{
    session_start(); 
    $_SESSION['message'] = 'No se ha podido eliminar el producto seleccionado.';
    header("Location: ../pagina/GestionDeProductos.php");
}

}else{
    session_start(); 
    $_SESSION['message'] = 'El producto seleccionado no existe.';
    header("Location: ../pagina/GestionDeProductos.php");
}
?>