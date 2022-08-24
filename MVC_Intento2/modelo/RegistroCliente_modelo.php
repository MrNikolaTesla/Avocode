<?php
class RegistroCliente_modelo{

    private $con;

    public function __construct() {
    require_once("conexion.php");
    $this->con=conectar::conexion();
    }

    public function set_cliente ($nombre, $apellido, $correo, $password) {
    $sql = "INSERT INTO usuarios (nombre, apellido, correo, password) VALUES ('$nombre', '$apellido', '$correo', '$password')";
    $query = mysqli_query($this->con, $sql);
    return $query;
    }

    }
?>