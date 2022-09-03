<?php
class productos_modelo{

    private $con;
    private $producto;

    public function __construct()
    {
        require_once("../modelo/conexion.php");
        $this->con=Conectar::conexion();
        $this->producto = array();
    }

    public function get_productos(){

        $sql = "SELECT * FROM articulo";
        $query = mysqli_query($this->con,$sql);

        while($filas = mysqli_fetch_array($query)){
            $this->producto[] = $filas;
        }

        return $this->producto;
    }


}

?>