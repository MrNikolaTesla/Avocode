<?php
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

        if($repetido!=null){
            $estado = 0;
    }
    
    if ($repetido==null){
        $estado = $producto_mod->update_producto($id, $nombre, $precio, $tipo);
    }     

if($estado==1) {
    if($_FILES['imagen'] != ""){
        $direccion_foto = "assets/Productos/id".$id.".png";
        $producto_mod->eliminar_imagen($direccion_foto);
        $producto_mod->agregar_imagen($id);
        session_start();
        $_SESSION['message'] = 'Producto e imagen modificada correctamente';
        //El echo rand es para evitar que la imagen no cambie por el cache al ser modificada.
        header("Location: PAGINA_GestionProductos.php?update=<?php echo rand(0,2581023);");
    }else{
    session_start();
    $_SESSION['message'] = 'Producto modificado correctamente.';
    header("Location: PAGINA_GestionProductos.php?update=<?php echo rand(0,2581023);");
     }
}else if($repetido!=null){
    if($_FILES['imagen'] != ""){
        $direccion_foto = "assets/Productos/id".$id.".png";
        $producto_mod->eliminar_imagen($direccion_foto);
        $producto_mod->agregar_imagen($id);
        session_start();
        $_SESSION['message'] = 'Imagen modificada correctamente';
        header("Location: PAGINA_GestionProductos.php?update=<?php echo rand(0,2581023);");
    }else{
    session_start();
    $_SESSION['message'] = 'Producto equivalente ya encontrado en el sistema.';
    header("Location: PAGINA_GestionProductos.php?update=<?php echo rand(0,2581023);");
     }
}else{
    session_start(); 
    $_SESSION['message'] = 'Producto no modificado, algo ha fallado.';
    header("Location: PAGINA_GestionProductos.php?update=<?php echo rand(0,2581023);");
}
}
}

?>