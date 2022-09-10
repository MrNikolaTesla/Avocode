<?php
class Eliminar_proveedor{

    private $con;

    public function __construct() {
    require_once("conexion.php");
    $this->con=conectar::conexion();
    }

    public function eliminar_proveedor ($id) {
    $sql = "DELETE FROM proveedor WHERE id_proveedor = $id";
    $query = mysqli_query($this->con, $sql);
    return $query;
    }

    }

?>