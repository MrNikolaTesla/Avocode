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
    public function barrer(){
        //Limpiar ordenes que hayan quedado sin completar
        $sql = "SELECT * FROM orden WHERE estado_orden = 'Generandose...'";
        $ordenes_incompletas = mysqli_query($this->con, $sql);
        foreach($ordenes_incompletas as $orden){
        $id_orden = $orden['id_orden'];
        $detalle_eliminar = "DELETE FROM detalles_orden WHERE orden = '$id_orden'";
        mysqli_query($this->con, $detalle_eliminar);
        }
        $sql2 = "DELETE FROM orden WHERE estado_orden = 'Generandose...'";
        mysqli_query($this->con, $sql2);
        //FIN DE ELIMINAR GENERANDOSE

        //Limpiar reservas vacias de usuario
        $sql3 = "SELECT * FROM reserva WHERE cliente = null";
        $reservas_vacias = mysqli_query($this->con, $sql3);
        foreach($reservas_vacias as $reserva){
        $id_reserva = $reserva['id_reserva'];
        $mesa_reservada = $reserva['mesa'];
        $sql4 = "UPDATE mesa set estado = 'Libre' WHERE id_mesa = '$mesa_reservada'";
        mysqli_query($this->con, $sql4);
        $reserva_eliminar = "DELETE FROM reserva WHERE id_reserva = '$id_reserva'";
        mysqli_query($this->con, $reserva_eliminar);
        }
        //FIN DE ELIMINAR RESERVA CLIENTE NULL
    }
}
?>