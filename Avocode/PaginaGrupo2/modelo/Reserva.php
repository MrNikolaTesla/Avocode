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
        $sql = "INSERT INTO reserva (mesa, fecha, hora, cliente, empleado) VALUES ('$num_mesa', '$fecha', '$hora', '$cliente_id', '$id_empleado_reserva')";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function set_reserva_cliente($num_mesa, $fecha, $hora, $cliente_id)
    {
        $sql = "INSERT INTO reserva (mesa, fecha, hora, cliente) VALUES ('$num_mesa', '$fecha', '$hora', '$cliente_id')";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

        //No quiere funcionar | Permite crear reserva incluso si la mesa esta ocupada o reservada, despues va modificar
    public function get_reserva($num_mesa, $fecha, $cliente_id)
    {
        $sql = "SELECT * FROM reserva WHERE mesa = '$num_mesa' and fecha = '$fecha' and cliente = '$cliente_id'";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function listar_reservas()
    {
        $sql = "SELECT reserva.id_reserva, reserva.mesa, reserva.fecha, reserva.hora, reserva.cliente, reserva.empleado
        FROM reserva , usuario
        WHERE reserva.cliente = usuario.id_usuario ORDER BY id_reserva";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)) {
            $this->reserva[] = $filas;
        }
        return $this->reserva;
    }

    public function null_mesas($id)
    {
        $sql1 = "UPDATE reserva set mesa=null WHERE mesa = $id";
        mysqli_query($this->con, $sql1);
    }

    public function null_cliente($id)
    {
        $sql1 = "UPDATE reserva set cliente=null WHERE cliente = $id";
        mysqli_query($this->con, $sql1);
    }

    public function null_empleado($id)
    {
        $sql1 = "UPDATE reserva set empleado=null WHERE empleado = $id";
        mysqli_query($this->con, $sql1);
    }

    public function nombre_cliente($id_cliente)
    {
        $sql = "SELECT nombre FROM usuario
        WHERE $id_cliente = id_usuario";
        $query = mysqli_query($this->con, $sql);
        $resultado = mysqli_fetch_array($query);
        return $resultado;
    }

    public function nombre_empleado($id_empleado)
    {
        $sql = "SELECT nombre FROM usuario
        WHERE $id_empleado = id_usuario";
        $query = mysqli_query($this->con, $sql);
        $resultado = mysqli_fetch_array($query);
        return $resultado;
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