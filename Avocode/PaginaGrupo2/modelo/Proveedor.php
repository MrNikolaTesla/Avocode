<?php
class Proveedor
{
    private $con;
    private $proveedor;

    public function __construct()
    {
        require_once("conexion.php");
        $this->con = conectar::conexion();
    }

    public function set_proveedor($nombre_apellido, $empresa, $productos, $telefono)
    {
        $sql = "INSERT INTO proveedor (nombre_apellido, empresa, productos, telefono) VALUES ('$nombre_apellido', '$empresa', '$productos', '$telefono')";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function get_proveedor($nombre_apellido, $empresa, $productos, $telefono)
    {
        $sql = "SELECT * FROM proveedor WHERE nombre_apellido = '$nombre_apellido' and empresa = '$empresa' and productos = '$productos' and telefono = '$telefono'";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function listar_proveedores()
    {

        $sql = "SELECT * FROM proveedor ORDER BY id_proveedor";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)) {
            $this->proveedor[] = $filas;
        }

        return $this->proveedor;
    }

    public function get_data($id)
    {
        $sql = "SELECT * FROM proveedor WHERE id_proveedor = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function buscar_proveedores ($producto)
    {
        $sql = "SELECT * FROM proveedor WHERE productos LIKE '%$producto%'";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function eliminar_proveedor ($id) {
        $sql = "DELETE FROM proveedor WHERE id_proveedor = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function update_proveedor ($id, $nombre_apellido, $empresa, $productos, $telefono) {
        $sql = "UPDATE proveedor set nombre_apellido = '$nombre_apellido', empresa = '$empresa', productos = '$productos', telefono  = '$telefono' WHERE id_proveedor = $id";
        $query = mysqli_query($this->con,$sql);
        return $query;
    }
}

?>