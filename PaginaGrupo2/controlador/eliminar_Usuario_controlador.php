<?php
require_once("../modelo/eliminar_Usuario_modelo.php");
    $eliminarUsuario = new Eliminar_usuario();
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $estado = $eliminarUsuario->eliminar_usuario($id);

if($estado==1) {
    session_start(); 
    $_SESSION['message'] = 'Usuario eliminado correctamente';
    header("Location: ../pagina/GestionDeUsuarios.php");
}else{
    session_start(); 
    $_SESSION['message'] = 'No se ha podido eliminar al usuario seleccionado.';
    header("Location: ../pagina/GestionDeUsuarios.php");
}

}else{
    session_start(); 
    $_SESSION['message'] = 'El usuario seleccionado no existe.';
    header("Location: ../pagina/GestionDeUsuarios.php");
}

?>