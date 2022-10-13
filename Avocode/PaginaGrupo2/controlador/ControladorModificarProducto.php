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
    //if($_POST['imagen']){
        //$nombre_foto = "id".$id.".png";
        //$producto_mod->eliminar_imagen($nombre_foto);
        //$id_imagen = $producto_mod->mayor_id();
        //$producto_mod->agregar_imagen($id_imagen);
        session_start();
        $_SESSION['message'] = 'Producto e imagen modificado correctamente';
        header("Location: GestionDeProductos.php");
    //}else{
       // session_start();
        //$_SESSION['message'] = 'Producto modificado correctamente';
   // header("Location: GestionDeProductos.php");
    //}
}else if($repetido!=null){
    //if($_POST['imagen'] != null){
        //$nombre_foto = "id".$id.".png";
        //$producto_mod->eliminar_imagen($nombre_foto);
        //$id_imagen = $producto_mod->mayor_id();
        //$producto_mod->agregar_imagen($id_imagen);
        session_start();
        $_SESSION['message'] = 'Producto e imagen modificado correctamente';
        header("Location: GestionDeProductos.php");
   // }else{
      //  session_start();
    //$_SESSION['message'] = 'Producto equivalente ya encontrado en el sistema.';
   // header("Location: GestionDeProductos.php");
   // }
}else{
    session_start(); 
    $_SESSION['message'] = 'Producto no modificado, algo ha fallado.';
    header("Location: GestionDeProductos.php");
}
}
}

?>