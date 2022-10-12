<?php
    require_once("modelo/ActualizarProducto.php");
    require_once("modelo/Repe_Producto_modelo.php");
    $actualizarProducto = new ActualizarProducto_modelo();
    $repe_producto = new Repe_Producto_modelo();
if(!empty($_POST["modificacion"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["precio"]) and !($_POST["tipo"] == "null")) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $tipo = $_POST["tipo"];

        $repetido = $repe_producto->get_producto($nombre, $precio, $tipo);

        if($repetido!=null){
            $estado = 0;
    }
    
    if ($repetido==null){
        
        $estado = $actualizarProducto->update_producto($id, $nombre, $precio, $tipo);
        
        
        //unlink('assets/Productos/id20.png');

        //$ruta_nuevo_destino = '../assets/Productos/';
            //if(move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_nuevo_destino.'id'.$id.'.png') ) {
               //echo 'Imagen guardada con éxito';
        //}
    }     

if($estado==1) {
    session_start(); 
    $_SESSION['message'] = 'Producto modificado correctamente';
    header("Location: GestionDeProductos.php");
}else if($repetido!=null){
    session_start(); 
    $_SESSION['message'] = 'Producto equivalente ya encontrado en el sistema.';
    header("Location: GestionDeProductos.php");
}else{
    session_start(); 
    $_SESSION['message'] = 'Producto no modificado, algo ha fallado.';
    header("Location: GestionDeProductos.php");
}
}
}

?>