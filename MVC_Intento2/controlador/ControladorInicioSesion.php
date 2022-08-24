<?php
require_once("modelo/InicioSesion_modelo.php");
$inicio_sesion = new Inicio_usuario();
if(!empty($_POST["boton_inicio"])){
    if(!empty($_POST["correo"]) and !empty($_POST["password"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $correo = $_POST["correo"];
        $contraseña = $_POST["password"];

        $estado = $registroAlumno->verify_user($correo, $contraseña);

if($estado==1) {
    echo '<div class="alert alert-success">Alumno dado de alta correctamente</div>';
}else{
    echo '<div class="alert alert-danger">Error al dar de alta alumno</div>';
}

} else {
    echo '<div class="alert alert-danger">Alguno de los campos está vacio.</div>';
}
}
?>