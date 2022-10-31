<?php
    require_once("modelo/Usuario.php");
    $usuario = new Usuario();
if(!empty($_POST["boton_registro"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"]) and !empty($_POST["password"]) and !($_POST["tipo"] == "null")) {

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $password = $_POST["password"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $tipo = $_POST["tipo"];

        $repetido = $usuario->get_correo($correo);
    
    if ($repetido==null){
        $estado = $usuario->set_usuario($nombre, $apellido, $correo, $password, $direccion, $telefono, $tipo);
    }else{
        $estado = null;
    }

if($estado==1) {
    $_SESSION['message'] = 'Usuario '.$tipo.' registrado correctamente!';
    header("Location: PAGINA_GestionUsuarios.php");
}else if($repetido!=null){
    $_SESSION['message'] = 'Correo ya está en uso';
    header("Location: PAGINA_GestionUsuarios.php");
}else if($estado==2) {
    $_SESSION['message'] = 'No tienes los permisos para realizar esta acción';
    header("Location: PAGINA_GestionUsuarios.php");
}
}else{
    $_SESSION['message'] = 'Alguno de los campos está vacío';
    header("Location: PAGINA_GestionUsuarios.php");
}
}

?>