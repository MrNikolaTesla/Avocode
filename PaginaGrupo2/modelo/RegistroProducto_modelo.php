<?php
class RegistroProducto_modelo{

    private $con;

    public function __construct() {
    require_once("conexion.php");
    $this->con=conectar::conexion();
    }

    public function set_producto ($nombre, $precio, $tipo) {
    $sql = "INSERT INTO articulo (nombre, precio, tipo) VALUES ('$nombre', '$precio', '$tipo')";
    $query = mysqli_query($this->con, $sql);
    return $query;
    }

    }
?>