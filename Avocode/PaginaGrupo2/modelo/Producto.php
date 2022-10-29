<?php
class Producto
{

    private $con;
    private $producto;

    public function __construct()
    {
        require_once("conexion.php");
        $this->con = Conectar::conexion();
        $this->producto = array();
    }

    public function listar_productos()
    {

        $sql = "SELECT * FROM producto ORDER BY id_producto";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)) {
            $this->producto[] = $filas;
        }

        return $this->producto;
    }

    public function get_producto($nombre, $precio, $tipo, $descripcion)
    {
        $sql = "SELECT * FROM producto WHERE nombre = '$nombre' and precio = $precio and tipo = '$tipo' and descripcion = '$descripcion'";
        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_array($query);
        return $result;
    }

    public function set_producto($nombre, $precio, $tipo, $descripcion)
    {
        $sql = "INSERT INTO producto (nombre, precio, tipo, descripcion) VALUES ('$nombre', '$precio', '$tipo', '$descripcion')";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function get_data($id)
    {
        $sql = "SELECT * FROM producto WHERE id_producto = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function buscar_productos($nombre)
    {
        $sql = "SELECT * FROM producto WHERE nombre LIKE '%$nombre%'";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function eliminar_producto($id)
    {
        $sql2 = "DELETE FROM producto WHERE id_producto = $id";
        $query2 = mysqli_query($this->con, $sql2);
        return $query2;
    }

    public function mayor_id()
    {
        $sql = "SELECT max(id_producto) as mayor from producto";
        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_array($query);
        $bucle = true;
        //Filtra un solo resultado del array, porque por x motivo suelta dos veces el mismo numero.
        foreach ($result as $id_producto) {
            if ($bucle == true) {
                $id = $id_producto;
                $bucle = false;
            }
        }
        //
        return $id;
    }

    public function update_producto($id, $nombre, $precio, $tipo, $descripcion)
    {
        $sql = "UPDATE producto set nombre = '$nombre', precio = '$precio', tipo = '$tipo', descripcion = '$descripcion' WHERE id_producto = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function agregar_imagen($id)
    {
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], 'assets/Productos/id' . $id . '.png')) {
            echo 'Imagen guardada con éxito';
        }
    }

    public function eliminar_imagen($direccion_foto)
    {
        unlink($direccion_foto);
    }

    public function modificar_imagen($id, $direccion_foto)
    {
        unlink($direccion_foto);
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], 'assets/Productos/id' . $id . '.png')) {
            echo 'Imagen guardada con éxito';
        }
    }
}
?>