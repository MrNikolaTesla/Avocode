<?php
class Mesa
{
    private $con;
    private $mesa;

    public function __construct()
    {
        require_once("conexion.php");
        $this->con = conectar::conexion();
    }

    public function set_mesa()
    {
        $sql = "INSERT INTO mesa (estado) VALUES ('Libre')";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function listar_mesas()
    {

        $sql = "SELECT * FROM mesa ORDER BY id_mesa";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)) {
            $this->mesa[] = $filas;
        }

        return $this->mesa;
    }

    public function listar_mesas_libres()
    {

        $sql = "SELECT * FROM mesa WHERE estado='Libre' ORDER BY id_mesa";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)) {
            $this->mesa[] = $filas;
        }

        return $this->mesa;
    }

    public function eliminar_mesa($id)
    {
        $sql = "DELETE FROM mesa WHERE id_mesa = $id";
        $resultado = mysqli_query($this->con, $sql);
        return $resultado;
    }

    public function update_mesa($id)
    {
        $estado_original = "SELECT * FROM mesa WHERE id_mesa = '$id'";
        $origin_state = mysqli_query($this->con, $estado_original);
        foreach ($origin_state as $origin) {
            if ($origin['estado'] == "Libre") {
                $nuevo_estado = 'Ocupada';
            } else if ($origin['estado'] == "Ocupada") {
                $nuevo_estado = 'Reservada';
            } else {
                $nuevo_estado = 'Libre';
            }
            $sql = "UPDATE mesa set estado = '$nuevo_estado' WHERE id_mesa = $id";
            $query = mysqli_query($this->con, $sql);
            return $query;
        }
    }

    public function reservar_mesa($id)
    {
        $sql = "UPDATE mesa set estado = 'Reservada' WHERE id_mesa = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function get_estado_mesa($id)
    {
        $sql = "SELECT estado FROM mesa WHERE id_mesa = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function ocupar_mesa($id)
    {
        $sql = "UPDATE mesa set estado = 'Ocupada' WHERE id_mesa = '$id'";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function set_estado_mesa($id, $estado)
    {
        $sql = "UPDATE mesa set estado = '$estado' WHERE id_mesa = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
}
