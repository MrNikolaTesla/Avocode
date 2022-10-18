<?php
    require_once("modelo/Proveedor.php");
    $proveedor_mod = new Proveedor();
if(!empty($_POST["modificacion"])){
    if(!empty($_POST["nombre_apellido"]) and !empty($_POST["empresa"]) and !empty($_POST["productos"]) and !empty($_POST["telefono"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $id = $_POST["id"];
        $nombre_apellido = $_POST["nombre_apellido"];
        $empresa = $_POST["empresa"];
        $productos = $_POST["productos"];
        $telefono = $_POST["telefono"];

        $repetido = $proveedor_mod->get_proveedor($nombre_apellido, $empresa, $productos, $telefono);

        if($repetido!=null){
            $estado = 0;
    }
    
    if ($repetido==null){
        $estado = $proveedor_mod->update_proveedor($id, $nombre_apellido, $empresa, $productos, $telefono);
    }

        

if($estado==1) {
    session_start(); 
    $_SESSION['message'] = 'Proveedor modificado correctamente';
    header("Location: PAGINA_GestionProveedores.php");
}else if($repetido!=null){
    session_start(); 
    $_SESSION['message'] = 'Producto equivalente ya encontrado en el sistema.';
    header("Location: PAGINA_GestionProveedores.php");
}else{
    session_start(); 
    $_SESSION['message'] = 'Proveedor no modificado, algo ha fallado.';
    header("Location: PAGINA_GestionProveedores.php");
}
}
echo "Algunos de los campos necesarios estan vacios";
}else{
echo "Algunos de los campos necesarios estan vacios";
}

?>