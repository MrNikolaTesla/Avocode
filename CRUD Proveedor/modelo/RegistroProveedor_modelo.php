<?php
class RegistroProveedor_modelo
{

    private $con;

    public function __construct()
    {
        require_once("conexion.php");
        $this->con = conectar::conexion();
    }

    public function set_proveedor($nombre_apellido, $empresa, $productos, $telefono)
    {
        $sql = "INSERT INTO proveedor (nombre_apellido, empresa, productos, telefono) VALUES ('$nombre_apellido', '$empresa', '$productos', '$telefono')";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
}

?>