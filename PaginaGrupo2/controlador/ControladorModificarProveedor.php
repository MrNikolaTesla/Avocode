<?php
    require_once("../modelo/ActualizarProveedor.php");
    require_once("../modelo/Repe_Proveedor_modelo.php");
    $actualizarProveedor = new ActualizarProveedor_modelo();
    $repe_proveedor = new Repe_Proveedor_modelo();
if(!empty($_POST["modificacion"])){
    if(!empty($_POST["nombre_apellido"]) and !empty($_POST["empresa"]) and !empty($_POST["productos"]) and !empty($_POST["telefono"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $id = $_POST["id_proveedor"];
        $nombre_apellido = $_POST["nombre_apellido"];
        $empresa = $_POST["empresa"];
        $productos = $_POST["productos"];
        $telefono = $_POST["telefono"];

        $repetido = $repe_proveedor->get_proveedor($nombre_apellido, $empresa, $telefono);

        if($repetido!=null){
            $estado = 0;
    }
    
    if ($repetido==null){
        $estado = $actualizarProveedor->update_proveedor($id, $nombre_apellido, $empresa, $productos, $telefono);
    }

        

if($estado==1) {
    session_start(); 
    $_SESSION['message'] = 'Proveedor modificado correctamente';
    header("Location: ../pagina/GestionDeProveedores.php");
}else if($repetido!=null){
    session_start(); 
    $_SESSION['message'] = 'Producto equivalente ya encontrado en el sistema.';
    header("Location: ../pagina/GestionDeProveedores.php");
}else{
    session_start(); 
    $_SESSION['message'] = 'Proveedor no modificado, algo ha fallado.';
    header("Location: ../pagina/GestionDeProveedores.php");
}
}
}

?>