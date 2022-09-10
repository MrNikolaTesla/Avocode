<?php
    require_once("../modelo/RegistroProveedor_modelo.php");
    require_once("../modelo/Repe_Proveedor_modelo.php");
    $registroProveedor = new RegistroProveedor_modelo();
    $repe_proveedor = new Repe_Proveedor_modelo();
if(!empty($_POST["boton_registro"])){
    if(!empty($_POST["nombre_apellido"]) and !empty($_POST["empresa"]) and !empty($_POST["productos"]) and !empty($_POST["telefono"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $nombre_apellido = $_POST["nombre_apellido"];
        $empresa = $_POST["empresa"];
        $productos = $_POST["productos"];
        $telefono = $_POST["telefono"];

        $repetido = $repe_proveedor->get_proveedor($nombre_apellido, $empresa, $telefono);

        if($repetido!=null){
            $estado = 0;
    }
    
    if ($repetido==null){
        $estado = $registroProveedor->set_proveedor($nombre_apellido, $empresa, $productos, $telefono);
    }

if($estado==1) {
    echo '<div class="alert alert-success">Proveedor registrado correctamente!</div>';
}else if($repetido!=null){
    echo '<div class="alert alert-danger">El proveedor ya ha sido agregado al sistema previamente.</div>';
}else{
    echo '<div class="alert alert-danger">Alguno de los campos está vacio.</div>';
}
}
}

?>