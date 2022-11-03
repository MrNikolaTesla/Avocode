<?php
class Escoba
{
    private $con;

    public function __construct()
    {
        require_once("conexion.php");
        $this->con = conectar::conexion();
    }

    //En proceso
    public function barrer_incompletos(){
        $sql = "SELECT * FROM orden WHERE estado_orden = 'Generandose...'";
        $ordenes_incompletas = mysqli_query($this->con, $sql);
        foreach($ordenes_incompletas as $orden){
        $id_orden = $orden['id_orden'];
        $detalle_eliminar = "DELETE FROM detalles_orden WHERE orden = '$id_orden'";
        mysqli_query($this->con, $detalle_eliminar);
        }
        $sql = "DELETE FROM orden WHERE estado_orden = 'Generandose...'";
        mysqli_query($this->con, $sql);
    }
}
?>