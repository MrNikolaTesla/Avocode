<?php
    session_start();
    require_once("modelo/Producto.php");
    $producto_mod = new Producto();
    if(!empty($_POST["modificacion"])){

        $id = $_POST["id"];
        $direccion_foto = "../assets/Productos/id".$id.".png";
        $producto_mod->modificar_imagen($id, $direccion_foto);

        $_SESSION['message'] = 'Producto modificado correctamente';
        header("Location: PAGINA_GestionProductos.php?update=<?php echo rand(0,9000000);");
        }
?>