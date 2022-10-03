<?php
require_once("../modelo/Usuario.php");
    $usuario = new Usuario();
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $estado = $usuario->eliminar_usuario($id);

if($estado== 1) {
    session_start(); 
    $_SESSION['message'] = 'Usuario eliminado correctamente';
    header("Location: ../pagina/GestionDeUsuarios.php");
}else if($estado == 2){
    session_start(); 
    $_SESSION['message'] = 'No puedes eliminarte a ti mismo!';
    header("Location: ../pagina/GestionDeUsuarios.php");
}else if($estado==0){
    session_start(); 
    $_SESSION['message'] = 'No tienes los permisos para realizar esta accion.';
    header("Location: ../pagina/GestionDeUsuarios.php");
    
}else{
    session_start(); 
    $_SESSION['message'] = 'El usuario seleccionado no existe.';
    header("Location: ../pagina/GestionDeUsuarios.php");
}
}
?>