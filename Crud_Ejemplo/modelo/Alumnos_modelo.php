<?php
class Alumnos_modelo{

    private $con;
    private $alumnos;

    public function __construct()
    {
        require_once("modelo/Conectar.php");
        $this->con=Conectar::conexion();
        $this->alumnos = array();
    }

    public function get_alumnos(){

        $sql = "SELECT * FROM alumnos";
        $query = mysqli_query($this->con,$sql);

        while($filas = mysqli_fetch_array($query)){
            $this->alumnos[] = $filas;
        }

        return $this->alumnos;
    }


}

?>