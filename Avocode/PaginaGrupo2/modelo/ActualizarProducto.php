<?php
class ActualizarProducto_modelo
{

    private $con;

    public function __construct()
    {
        require_once("conexion.php");
        $this->con = conectar::conexion();
    }

    public function update_producto($id, $nombre, $precio, $tipo)
    {
        $sql = "UPDATE articulo set nombre = '$nombre', precio = '$precio', tipo = '$tipo' WHERE id_articulo = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
}

?>