<?php
require_once("../modelo/eliminar_Usuario_modelo.php");
    $eliminarUsuario = new Eliminar_usuario();
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $estado = $eliminarUsuario->eliminar_usuario($id);

if($estado== 1) {
    session_start(); 
    $_SESSION['message'] = 'Usuario eliminado correctamente';
    header("Location: ../pagina/GestionDeUsuarios.php");
}else if($estado == 3){
    session_start(); 
    $_SESSION['message'] = 'No puedes eliminarte a ti mismo!';
    header("Location: ../pagina/GestionDeUsuarios.php");
}else if(!$estado){
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