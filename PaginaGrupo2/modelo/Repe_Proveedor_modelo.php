<?php
class Repe_Proveedor_modelo
{

    private $con;

    public function __construct()
    {
        require_once("conexion.php");
        $this->con = conectar::conexion();
    }

    public function get_proveedor($nombre_apellido, $empresa, $telefono)
    {
        $sql = "SELECT * FROM proveedor WHERE nombre_apellido LIKE '%$nombre_apellido%' and empresa = '$empresa' and telefono = '$telefono'";
        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_array($query);
        return $result;
    }
}

?>