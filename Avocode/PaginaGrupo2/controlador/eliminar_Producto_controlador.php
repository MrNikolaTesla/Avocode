<?php
require_once("../modelo/Producto.php");
    $producto = new Producto();
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $estado = $producto->eliminar_producto($id);

if($estado==1) {
    
    // ELIMINA LA IMAGEN CONECTADA AL PRODUCTO //
    $direccion_foto = "../assets/Productos/id".$id.".png";
    $producto->eliminar_imagen($direccion_foto);
    // FINAL //

    session_start(); 
    $_SESSION['message'] = 'Producto eliminado correctamente';
    header("Location: ../GestionDeProductos.php");
}else{
    session_start(); 
    $_SESSION['message'] = 'No se ha podido eliminar el producto seleccionado.';
    header("Location: ../GestionDeProductos.php");
}

}else{
    session_start(); 
    $_SESSION['message'] = 'El producto seleccionado no existe.';
    header("Location: ../GestionDeProductos.php");
}

?>