<?php
require_once("../modelo/RegistroCliente_modelo.php");
require_once("../modelo/Repe_Registro_modelo.php");
$registroCliente = new RegistroCliente_modelo();
$repe_registro = new Repe_Registro_modelo();
if(!empty($_POST["boton_registro"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"]) and !empty($_POST["passwordRegistro1"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $password = $_POST["passwordRegistro1"];

        $repetido = $repe_registro->get_correo($correo);

        if($repetido!=null){
            $estado = 0;
    }
    
    if ($repetido==null){
        $estado = $registroCliente->set_cliente($nombre, $apellido, $correo, $password);
    }

if($estado==1) {
    echo '<div class="alert alert-success">Usuario registrado correctamente!</div>';
}else if($estado==0 && $repetido){
    echo '<div class="alert alert-danger">El correo ya esta en uso.</div>';
}else{
    echo '<div class="alert alert-danger">Algo ha ocurrido, intente de nuevo mas tarde.</div>';
}

} else {
    echo '<div class="alert alert-danger">Alguno de los campos está vacio.</div>';
}
}
?>