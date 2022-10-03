<?php
class ActualizarProveedor_modelo{

    private $con;

    public function __construct() {
    require_once("conexion.php");
    $this->con=conectar::conexion();
    }

    public function update_proveedor ($id, $nombre_apellido, $empresa, $productos, $telefono) {
    $sql = "UPDATE proveedor set nombre_apellido = '$nombre_apellido', empresa = '$empresa', productos = '$productos', telefono  = '$telefono' WHERE id_proveedor = $id";
    $query = mysqli_query($this->con,$sql);
    return $query;
    }

    }

?>