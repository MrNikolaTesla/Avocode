<?php
class modificar_producto{

    private $con;
    private $producto;

    public function __construct()
    {
        require_once("../modelo/conexion.php");
        $this->con=Conectar::conexion();
        $this->usuario = array();
    }

    public function get_data(){
    $id = $_SESSION['mod_producto'];
    $sql = "SELECT * FROM articulo WHERE id_articulo = $id";
    $query = mysqli_query($this->con,$sql);
    return $query;
    }
}

?>