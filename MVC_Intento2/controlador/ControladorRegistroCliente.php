<?php
require_once("modelo/RegistroCliente_modelo.php");
$registroCliente = new RegistroCliente_modelo();
if(!empty($_POST["boton_registro"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"]) and !empty($_POST["passwordRegistro1"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $contraseña = $_POST["passwordRegistro1"];

        $estado = $registroAlumno->set_alumno($nombre, $apellido, $correo, $contraseña);

if($estado==1) {
    echo '<div class="alert alert-success">Alumno dado de alta correctamente</div>';
}else{
    echo '<div class="alert alert-danger">Error al dar de alta alumno</div>';
}

} else {
    echo '<div class="alert alert-danger">Alguno de los campos está vacio.</div>';
}
}
?>