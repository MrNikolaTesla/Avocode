<?php
session_start(); 
require_once("modelo/InicioSesion.php");
$inicio_sesion = new Inicio_usuario();
if(!empty($_POST["boton_inicio"])){
    if(!empty($_POST["correo"]) and !empty($_POST["password"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $correo = $_POST["correo"];
        $password = $_POST["password"];

        $estado = $inicio_sesion->verify_user($correo, $password);

if($estado) {

$_SESSION['id'] = $estado['id_usuario']; 
$_SESSION['tipo'] = $estado['tipo']; 
$_SESSION['nombre'] = $estado['nombre']; 
$_SESSION['apellido'] = $estado['apellido']; 
$_SESSION['correo'] = $estado['correo']; 
$_SESSION['password'] = $estado['password']; 
$_SESSION['direccion'] = $estado['direccion']; 
$_SESSION['telefono'] = $estado['telefono']; 
$_SESSION['nuevo_ingreso'] = "true";
 

// Tipo de Usuario Cliente --> Index  // Empleado ó Admin --> Gestión Usuarios
    header("Location: controlador/PERMISOS_Redirección_CONTROLADOR.php");
}else {
    echo '<div class="alert alert-danger">Contraseña o correo incorrecto.</div>';
}

} else {
    echo '<div class="alert alert-danger">Algunos de los campos están vacíos</div>'; 
}
}
?>