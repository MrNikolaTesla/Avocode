<?php
    require_once("modelo/Proveedor.php");
    $proveedor = new Proveedor();
if(!empty($_POST["boton_registro"])){
    if(!empty($_POST["nombre_apellido"]) and !empty($_POST["empresa"]) and !empty($_POST["productos"]) and !empty($_POST["telefono"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $nombre_apellido = $_POST["nombre_apellido"];
        $empresa = $_POST["empresa"];
        $productos = $_POST["productos"];
        $telefono = $_POST["telefono"];

        $repetido = $proveedor->get_proveedor($nombre_apellido, $empresa, $productos, $telefono);
        if($repetido==1){
            $estado = 0;
    }
    
    if ($repetido!=1){
        $estado = $proveedor->set_proveedor($nombre_apellido, $empresa, $productos, $telefono);
    }

if($estado==1) {
    $_SESSION['message'] = 'Proveedor registrado correctamente!';
    header("Location: PAGINA_GestionProveedores.php");
}else if($estado == 0){
    $_SESSION['message'] = 'El proveedor ya ha sido agregado al sistema previamente.';
    header("Location: PAGINA_GestionProveedores.php");
} 
}else{
    $_SESSION['message'] = 'Alguno de los campos está vacio.';
    header("Location: PAGINA_GestionProveedores.php");
}
}

?>