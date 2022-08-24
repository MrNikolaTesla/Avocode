<?php
require_once("../modelo/InicioSesion.php");
$inicio_sesion = new Inicio_usuario();
if(!empty($_POST["boton_inicio"])){
    if(!empty($_POST["correo"]) and !empty($_POST["password"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $correo = $_POST["correo"];
        $password = $_POST["password"];

        $estado = $inicio_sesion->verify_user($correo, $password);

if($estado==1) {
    echo '<div class="alert alert-success">Sesion Iniciada!</div>';
}else{
    echo '<div class="alert alert-danger">Oops!</div>';
}

} else {
    echo '<div class="alert alert-danger">Vacio.</div>';
}
}
?>