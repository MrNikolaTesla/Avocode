<?php
    session_start();
    require_once("modelo/Producto.php");
    $producto_mod = new Producto();
if(!empty($_POST["modificacion"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["precio"]) and !($_POST["tipo"] == "null")) {

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $tipo = $_POST["tipo"];

        $repetido = $producto_mod->get_producto($nombre, $precio, $tipo);

        if($repetido!=null){
            $estado = 3;
    }else if($repetido==null){
        $estado = $producto_mod->update_producto($id, $nombre, $precio, $tipo);
    }

    //TEMA NO CAPTA SI HAY O NO IMAGENES, COSO, QUIZAS NUEVO VALOR EN "FILES?"
if($estado==1) {
        $_SESSION['message'] = 'Producto modificado correctamente';
        //El echo rand es para evitar que la imagen no cambie por el cache al ser modificada.
        header("Location: PAGINA_GestionProductos.php?update=<?php echo rand(0,9000000);");
    }else if($estado==3) {
    $_SESSION['message'] = 'Producto equivalente ya encontrado en el sistema.';
    header("Location: PAGINA_GestionProductos.php?update=<?php echo rand(0,9000000);");
     }else if($estado==0){
    $_SESSION['message'] = 'Producto no actualizado, algo ha sucedido.';
    header("Location: PAGINA_GestionProductos.php?update=<?php echo rand(0,9000000);");
    }
}else{
    $_SESSION['message'] = 'Producto no modificado, algo ha fallado.';
    header("Location: PAGINA_GestionProductos.php?update=<?php echo rand(0,9000000);");
}
}


?>