<?php
class modificar_proveedor
{

    private $con;
    private $usuario;

    public function __construct()
    {
        require_once("conexion.php");
        $this->con = Conectar::conexion();
        $this->usuario = array();
    }

    public function get_data()
    {
        $id = $_SESSION['mod_proveedor'];
        $sql = "SELECT * FROM proveedor WHERE id_proveedor = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
}

?>