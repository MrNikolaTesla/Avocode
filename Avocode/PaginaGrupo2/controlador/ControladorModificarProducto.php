<?php
    session_start();
    require_once("modelo/Producto.php");
    $producto_mod = new Producto();
if(!empty($_POST["modificacion"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["precio"]) and !($_POST["tipo"] == "null")) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $tipo = $_POST["tipo"];

        $repetido = $producto_mod->get_producto($nombre, $precio, $tipo);
///////AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA 
        if($repetido!=null){
            $estado = 0;
    }else if($repetido!=null){
        $producto_mod->update_producto($id, $nombre, $precio, $tipo);
        $estado = 1;
    }else if($repetido==null && $uploadOk==0){
        $producto_mod->update_producto($id, $nombre, $precio, $tipo);
        $estado = 2;
    }else if($repetido==null && $uploadOk==1){
        $producto_mod->update_producto($id, $nombre, $precio, $tipo);
        $estado = 1;
    }

    //TEMA NO CAPTA SI HAY O NO IMAGENES, COSO, QUIZAS NUEVO VALOR EN "FILES?"
if($estado==1) {
        $direccion_foto = "assets/Productos/id".$id.".png";
        $producto_mod->eliminar_imagen($direccion_foto);
        $producto_mod->agregar_imagen($id);
        $_SESSION['message'] = 'Producto modificado correctamente';
        flush();
        //El echo rand es para evitar que la imagen no cambie por el cache al ser modificada.
        //header("Location: PAGINA_GestionProductos.php?update=<?php echo rand(0,9000000);");
    }else if($estado==2) {
    $_SESSION['message'] = 'Producto modificado correctamente.';
    flush();
    //header("Location: PAGINA_GestionProductos.php?update=<?php echo rand(0,9000000);");
     }else if($estado==0){
    $_SESSION['message'] = 'Producto equivalente ya encontrado en el sistema.';
    flush();
    //header("Location: PAGINA_GestionProductos.php?update=<?php echo rand(0,9000000);");
    }
}else{
    $_SESSION['message'] = 'Producto no modificado, algo ha fallado.';
    //header("Location: PAGINA_GestionProductos.php?update=<?php echo rand(0,9000000);");
}
}


?>