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

        $repetido_usuario = $repe_registro->get_usuario($id, $nombre, $apellido, $correo, $direccion, $telefono);
    
    if ($repetido_usuario==2){
        $repetido_corre = $repe_registro->get_correo($correo);
        if($repetido_corre!=null){
            $mod_correo = 0;
        }else{
            $mod_correo = 1;
        }
        if($mod_correo == 1){
            $estado = $actualizarUsuario->update_usuario($id, $nombre, $apellido, $correo, $direccion, $telefono, $tipo);
        }else{
        $estado = 4;
    }
    }
        

if($estado==1) {
    $_SESSION['message'] = 'Usuario modificado correctamente';
    header("Location: GestionDeUsuarios.php");
}else if($repetido_usuario==1){
    $_SESSION['message'] = 'Usuario identico ya dentro del sistema.';
    header("Location: GestionDeUsuarios.php");
}else if($estado==0){
    $_SESSION['message'] = 'No cuentas con los permisos para modificar este usuario.';
    header("Location: GestionDeUsuarios.php");
}else if($estado==2){
    $_SESSION['message'] = 'No es posible cambiar tu tipo de usuario a una posicion superior.';
    header("Location: GestionDeUsuarios.php");
}else if($estado==3){
    $_SESSION['message'] = 'No es posible cambiar el tipo de usuario a una posicion superior.';
    header("Location: GestionDeUsuarios.php");
}else if($estado==4){
    $_SESSION['message'] = 'Correo ya en uso.';
    header("Location: GestionDeUsuarios.php");
}
}
echo '<div class="alert alert-danger">No se ha elegido un tipo de usuario.</div>';
}

?>
