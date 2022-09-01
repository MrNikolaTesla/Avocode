<?php
class Eliminar_usuario{

    private $con;

    public function __construct() {
    require_once("conexion.php");
    $this->con=conectar::conexion();
    }

    public function eliminar_usuario ($id) {
    $sql = "DELETE FROM usuario WHERE id_usuario = $id";
    $query = mysqli_query($this->con, $sql);
    return $query;
    }

    }
?>