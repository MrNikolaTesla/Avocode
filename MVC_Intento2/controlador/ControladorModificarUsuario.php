<?php
    require_once("../modelo/ActualizarUsuario.php");
    $actualizarUsuario = new ActualizarUsuario_modelo();
if(!empty($_POST["modificar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"]) and !empty($_POST["password"]) and !($_POST["tipo"] == "null")) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $password = $_POST["password"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $tipo = $_POST["tipo"];

        $estado = $actualizarUsuario->update_usuario($nombre, $apellido, $correo, $password, $direccion, $telefono, $tipo);

if($estado==1) {
    echo '<div class="alert alert-success">Usuario modificado correctamente!</div>';
}else{
    echo '<div class="alert alert-danger">Algo ha ocurrido.</div>';
}
}
}
?>