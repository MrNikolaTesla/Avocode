<?php
session_start();
    require_once("modelo/Usuario.php");
    $usuario_mod = new Usuario();
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

        $ver_usuario_rep = $usuario_mod->get_usuario($id, $correo);
    
        if ($ver_usuario_rep==2){
            $repetido = false;
            $estado = $usuario_mod->update_usuario($id, $nombre, $apellido, $correo, $direccion, $telefono, $tipo);
            }else if($ver_usuario_rep==1){
            $repetido = true;
            }

if($estado==1 && $repetido == false) {
    $_SESSION['message'] = 'Usuario modificado correctamente';
    header("Location: PAGINA_GestionUsuarios.php");
}else if($estado==2 && $repetido == false){
    $_SESSION['message'] = 'No es posible cambiar un usuario a una posicion superior.';
    header("Location: PAGINA_GestionUsuarios.php");
}else if($estado==3 && $repetido == false){
    $_SESSION['message'] = 'No tienes permisos para modificar otros administradores del sistema.';
    header("Location: PAGINA_GestionUsuarios.php");
}
}else
echo '<div class="alert alert-danger">No se ha elegido un tipo de usuario.</div>';
}
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
?>
