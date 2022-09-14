<?php
    require_once("../modelo/RegistroUsuario_modelo.php");
    require_once("../modelo/Repe_Registro_modelo.php");
    $registroUsuario = new RegistroUsuario_modelo();
    $repe_registro = new Repe_Registro_modelo();
if(!empty($_POST["boton_registro"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"]) and !empty($_POST["password"]) and !($_POST["tipo"] == "null")) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $password = $_POST["password"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $tipo = $_POST["tipo"];

        $repetido = $repe_registro->get_correo($correo);
    
    if ($repetido==null){
        $estado = $registroUsuario->set_cliente($nombre, $apellido, $correo, $password, $direccion, $telefono, $tipo);
    }

if($estado==1) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Usuario '.$tipo.' registrado correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}else if($repetido!=null){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    El correo ya esta en uso.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}else if($estado==2) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    No tienes los permisos para realizar esta accion.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
}else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Alguno de los campos está vacio.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
}

?>