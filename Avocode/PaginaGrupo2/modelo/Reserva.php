<?php
class Reserva
{
    private $con;
    private $reserva;

    public function __construct()
    {
        require_once("conexion.php");
        $this->con = conectar::conexion();
    }

    public function set_reserva($num_mesa, $fecha, $hora, $cliente_id, $id_empleado_reserva)
    {
        $sql = "INSERT INTO reserva (mesa, fecha, cliente, empleado) VALUES ('$num_mesa', '$fecha', '$hora', '$cliente_id', '$id_empleado_reserva')";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function get_reserva($num_mesa, $fecha, $hora, $cliente_id)
    {
        $sql = "SELECT * FROM reserva WHERE mesa = '$num_mesa' and fecha = '$fecha' and hora = '$hora' and cliente = '$cliente_id'";
        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_array($query);
        return $result;
    }

    public function listar_reserva()
    {

        $sql = "SELECT * FROM reserva ORDER BY id_reserva";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)) {
            $this->reserva[] = $filas;
        }

        return $this->reserva;
    }

    public function get_data($id)
    {
        $sql = "SELECT * FROM reserva WHERE id_reserva = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function buscar_reservas ($producto)//ACA DEBERIA BUSCAR el nombre del cliente a traves de su impresionante relacion si logro hacerla funcionar
    {
        //$sql = "SELECT * FROM reserva WHERE productos LIKE '%$producto%'";
        //$query = mysqli_query($this->con, $sql);
        //return $query;
    }

    public function eliminar_reserva ($id) {
        $sql = "DELETE FROM reserva WHERE id_reserva = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function update_reserva ($id, $num_mesa, $fecha, $hora, $cliente_id, $id_empleado_reserva) {
        $sql = "UPDATE reserva set mesa = '$num_mesa', fecha = '$fecha', hora = '$hora', cliente  = '$cliente_id', empleado = '$id_empleado_reserva' WHERE id_reserva = $id";
        $query = mysqli_query($this->con,$sql);
        return $query;
    }
}

?>