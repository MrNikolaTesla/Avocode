<?php
class modificar_producto{

    private $con;
    private $producto;

    public function __construct()
    {
        require_once("../modelo/conexion.php");
        $this->con=Conectar::conexion();
        $this->producto = array();
    }

    public function get_data($id){
    $sql = "SELECT * FROM articulo WHERE id_articulo = $id";
    $query = mysqli_query($this->con,$sql);
    return $query;
    }
}

?>