<?php
require_once("../modelo/RegistroUsuario_modelo.php");
$registroUsuario = new RegistroUsuario_modelo();
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"]) and !empty($_POST["password"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $password = $_POST["password"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $tipo = $_POST["tipo"];

        $estado = $registroUsuario->set_cliente($nombre, $apellido, $correo, $password, $direccion, $telefono, $tipo);

if($estado==1) {
    echo '<div class="alert alert-success">Usuario '.$tipo.' registrado correctamente!</div>';
}else{
    echo '<div class="alert alert-danger">Fallo al registrar el usuario.</div>';
}

} else {
    echo '<div class="alert alert-danger">Alguno de los campos requeridos está vacio.</div>';
}
?>