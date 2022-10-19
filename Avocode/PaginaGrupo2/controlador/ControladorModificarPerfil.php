<?php
session_start();
    require_once("modelo/Usuario.php");
    $usuario_mod = new Usuario();
if(!empty($_POST["modificacion"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"])) {
        
        //Se lleva todos los datos del POST

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];

        //Verifica si ya hay un usuario identico
        $ver_usuario_rep = $usuario_mod->get_usuario($id, $correo);
    //2 = No hay usuario identico
    if ($ver_usuario_rep==2){
        $repetido = false;
        $estado = $usuario_mod->update_perfil ($id, $nombre, $apellido, $correo, $direccion, $telefono);
        }else if ($ver_usuario_rep==3){
        $repetido = null;
        }else if($ver_usuario_rep==1){
        $repetido = true;
        }
    }

if($estado==1 && $repetido==false) {
        $_SESSION['correo'] = $correo;
    $_SESSION['message'] = 'Perfil modificado correctamente';
    $_SESSION['id'] = $id;
    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellido'] = $apellido;
    $_SESSION['correo'] = $correo;
    $_SESSION['direccion'] = $direccion;
    $_SESSION['telefono'] =  $telefono;
    header("Location: menu_principal.php");
}else if($estado==0 && $repetido==false){
    $_SESSION['message'] = 'No hemos podido modificar su perfil, intente de nuevo mas tarde.';
    header("Location: menu_principal.php");
}else if($repetido==true){
    $_SESSION['message'] = 'Correo modificado ya en uso por otro usuario.';
    header("Location: menu_principal.php");
}else if($repetido==null){
    $_SESSION['message'] = 'Algo revento.';
    header("Location: menu_principal.php");
}
}
?>
