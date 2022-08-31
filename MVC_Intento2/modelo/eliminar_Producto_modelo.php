<?php
class Eliminar_producto{

    private $con;

    public function __construct() {
    require_once("conexion.php");
    $this->con=conectar::conexion();
    }

    public function eliminar_producto ($id) {
    $sql = "DELETE FROM articulo WHERE id = $id";
    $query = mysqli_query($this->con, $sql);
    return $query;
    }

    }
?>