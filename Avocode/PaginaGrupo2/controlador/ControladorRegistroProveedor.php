<?php
    require_once("../modelo/Proveedor.php");
    $proveedor = new Proveedor();
if(!empty($_POST["boton_registro"])){
    if(!empty($_POST["nombre_apellido"]) and !empty($_POST["empresa"]) and !empty($_POST["productos"]) and !empty($_POST["telefono"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $nombre_apellido = $_POST["nombre_apellido"];
        $empresa = $_POST["empresa"];
        $productos = $_POST["productos"];
        $telefono = $_POST["telefono"];

        $repetido = $proveedor->get_proveedor($nombre_apellido, $empresa, $productos, $telefono);

        if($repetido!=null){
            $estado = 0;
    }
    
    if ($repetido==null){
        $estado = $proveedor->set_proveedor($nombre_apellido, $empresa, $productos, $telefono);
    }

if($estado==1) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Proveedor registrado correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}else if($repetido!=null){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    El proveedor ya ha sido agregado al sistema previamente.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Alguno de los campos está vacio.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
}
}

?>