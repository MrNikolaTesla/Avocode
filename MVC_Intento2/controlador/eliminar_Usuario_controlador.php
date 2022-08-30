<?php
require_once("../modelo/eliminar_Usuario_modelo.php");
    $eliminarUsuario = new Eliminar_usuario();
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $estado = $eliminarUsuario->eliminar_usuario($id);

if($estado==1) {
    session_start(); 
    $_SESSION['message'] = 'Usuario eliminado correctamente';
    header("Location: ../vista/GestionDeUsuarios.php");
}else{
    session_start(); 
    $_SESSION['message'] = 'No se ha podido eliminar al usuario seleccionado.';
    header("Location: ../vista/GestionDeUsuarios.php");
}

}else{
    session_start(); 
    $_SESSION['message'] = 'No se hay un usuario seleccionado.';
    header("Location: ../vista/GestionDeUsuarios.php");
}
?>