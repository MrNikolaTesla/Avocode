<?php
require_once("modelo/Usuario.php");
$usuario = new Usuario();
if(!empty($_POST["boton_registro"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"]) and !empty($_POST["passwordRegistro1"])) {

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $password = $_POST["passwordRegistro1"];

        $repetido = $usuario->get_correo($correo);

        if($repetido!=null){
            $estado = 0;
    }
    
    if ($repetido==null){
        $estado = $usuario->set_cliente($nombre, $apellido, $correo, $password);
    }

if($estado==1) {
    $_SESSION['message_reg'] = 'Usuario registrado correctamente!';
}else if($estado==0 && $repetido){
    $_SESSION['message_reg'] = 'El correo ya esta en uso.';
}else{
    $_SESSION['message_reg'] = 'Algo ha ocurrido, intente de nuevo mas tarde.';
}

} else {
    $_SESSION['message_reg'] = 'Alguno de los campos está vacio.';
}
}

?>