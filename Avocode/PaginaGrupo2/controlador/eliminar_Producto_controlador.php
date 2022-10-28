<?php
session_start(); 
require_once("../modelo/Producto.php");
    $producto = new Producto();
    require_once("../modelo/Orden.php");
    $limpiar_mesas_ordenes = new Orden();
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $limpiar_mesas_ordenes->null_producto_detalles_orden($id);
        $estado = $producto->eliminar_producto($id);

if($estado==1) {
    
    // ELIMINA LA IMAGEN CONECTADA AL PRODUCTO //
    $direccion_foto = "../assets/Productos/id".$id.".png";
    $producto->eliminar_imagen($direccion_foto);
    // FINAL //
    $_SESSION['message'] = 'Producto eliminado correctamente';
    header("Location: ../PAGINA_GestionProductos.php");
}else{
    $_SESSION['message'] = 'No se ha podido eliminar el producto seleccionado.';
    header("Location: ../PAGINA_GestionProductos.php");
}
}else{
    $_SESSION['message'] = 'El producto seleccionado no existe.';
    header("Location: ../PAGINA_GestionProductos.php");
}

?>