<?php
require_once("../modelo/InicioSesion.php");
$inicio_sesion = new Inicio_usuario();
if(!empty($_POST["boton_inicio"])){
    if(!empty($_POST["correo"]) and !empty($_POST["password"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $correo = $_POST["correo"];
        $password = $_POST["password"];

        $estado = $inicio_sesion->verify_user($correo, $password);

if($estado) {

session_start(); 
$_SESSION['id'] = $estado['id_usuario']; 
$_SESSION['tipo'] = $estado['tipo']; 
$_SESSION['nombre'] = $estado['nombre']; 
$_SESSION['apellido'] = $estado['apellido']; 
$_SESSION['correo'] = $estado['correo']; 
$_SESSION['password'] = $estado['password']; 
$_SESSION['direccion'] = $estado['direccion']; 
$_SESSION['telefono'] = $estado['telefono']; 
$_SESSION['nuevo_ingreso'] = "true";
 
    header("Location: ../pagina/menu_principal.php");
}else {
    echo '<div class="alert alert-danger">Contraseña o correo incorrecto.</div>';
}

} else {
    echo '<div class="alert alert-danger">Vacio.</div>'; 
}
}

?>