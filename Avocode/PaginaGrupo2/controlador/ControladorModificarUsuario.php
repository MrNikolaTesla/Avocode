<?php
    require_once("modelo/ActualizarUsuario.php");
    require_once("modelo/Repe_Registro_modelo.php");
    $actualizarUsuario = new ActualizarUsuario_modelo();
    $repe_registro = new Repe_Registro_modelo();
if(!empty($_POST["modificacion"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"]) and isset($_POST["tipo"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $tipo = $_POST["tipo"];

        $repetido = $repe_registro->get_usuario($id, $nombre, $apellido, $correo, $direccion, $telefono);
    
    if ($repetido==2){
        $estado = $actualizarUsuario->update_usuario($id, $nombre, $apellido, $correo, $direccion, $telefono, $tipo);
    }
        

if($estado==1) {
    session_start(); 
    $_SESSION['message'] = 'Usuario modificado correctamente';
    header("Location: GestionDeUsuarios.php");
}else if($repetido==1){
    session_start(); 
    $_SESSION['message'] = 'Correo ya en uso.';
    header("Location: GestionDeUsuarios.php");
}else if($estado==0){
    session_start(); 
    $_SESSION['message'] = 'No cuentas con los permisos para modificar este usuario.';
    header("Location: GestionDeUsuarios.php");
}else if($estado==2){
    session_start(); 
    $_SESSION['message'] = 'No es posible cambiar tu tipo de usuario a una posicion superior.';
    header("Location: GestionDeUsuarios.php");
}else if($estado==3){
    session_start(); 
    $_SESSION['message'] = 'No es posible cambiar el tipo de usuario a una posicion superior.';
    header("Location: GestionDeUsuarios.php");
}
}
echo '<div class="alert alert-danger">No se ha elegido un tipo de usuario.</div>';
}

?>
