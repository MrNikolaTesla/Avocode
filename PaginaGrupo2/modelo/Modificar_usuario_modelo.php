<?php
class modificar_usuario{

    private $con;
    private $usuario;

    public function __construct()
    {
        require_once("../modelo/conexion.php");
        $this->con=Conectar::conexion();
        $this->usuario = array();
    }

    public function get_data(){
    $id = $_SESSION['mod_usuario'];
    $sql = "SELECT * FROM usuario WHERE id_usuario = $id";
    $query = mysqli_query($this->con,$sql);
    return $query;
    }
}

?>