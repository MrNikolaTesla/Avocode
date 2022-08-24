<?php
class RegistroAlumno_modelo{

    private $con;

    public function __construct() {
    require_once("modelo/Conectar.php");
    $this->con=conectar::conexion();
    }

    public function set_alumno ($nombre, $apellido, $edad, $nota) {
    $sql = "INSERT INTO alumnos (nombre, apellido, edad, nota) VALUES ('$nombre', '$apellido', $edad, $nota)";
    $query = mysqli_query($this->con, $sql);
    return $query;
    }

    }
?>