<?php
require_once("modelo/RegistroAlumno_modelo.php");
$registroAlumno = new RegistroAlumno_modelo();
if(!empty($_POST["btnenviar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"]) and !empty($_POST["passwordRegistro1"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $nota = $_POST["nota"];

        $estado = $registroAlumno->set_alumno($nombre, $apellido, $edad, $nota);

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