<?php
class Repe_Producto_modelo{

    private $con;

    public function __construct() {
    require_once("conexion.php");
    $this->con=conectar::conexion();
    }

    public function get_producto ($nombre, $precio, $tipo) {
        $sql = "SELECT * FROM articulo WHERE nombre = '$nombre' and precio = '$precio' and tipo = '$tipo'";
        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_array($query);
    return $result;
    }

    }
?>