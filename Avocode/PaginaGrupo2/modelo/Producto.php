<?php
class Producto{

    private $con;
    private $producto;

    public function __construct()
    {
        require_once("conexion.php");
        $this->con=Conectar::conexion();
        $this->producto = array();
    }

    public function listar_productos(){

        $sql = "SELECT * FROM articulo";
        $query = mysqli_query($this->con,$sql);

        while($filas = mysqli_fetch_array($query)){
            $this->producto[] = $filas;
        }

        return $this->producto;
    }

    public function get_producto($nombre, $precio, $tipo)
    {
        $sql = "SELECT * FROM articulo WHERE nombre = '$nombre' and precio = '$precio' and tipo = '$tipo'";
        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_array($query);
        return $result;
    }

    public function set_producto ($nombre, $precio, $tipo) {
        $sql = "INSERT INTO articulo (nombre, precio, tipo) VALUES ('$nombre', '$precio', '$tipo')";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function get_data($id){
        $sql = "SELECT * FROM articulo WHERE id_articulo = $id";
        $query = mysqli_query($this->con,$sql);
        echo "Coso";
        return $query;
    }

    public function eliminar_producto($id)
    {
        $sql = "DELETE FROM articulo WHERE id_articulo = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function update_producto($id, $nombre, $precio, $tipo)
    {
        $sql = "UPDATE articulo set nombre = '$nombre', precio = '$precio', tipo = '$tipo' WHERE id_articulo = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
}

?>
