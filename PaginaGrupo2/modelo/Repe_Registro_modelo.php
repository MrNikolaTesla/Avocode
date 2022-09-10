<?php
class Repe_Registro_modelo
{

    private $con;

    public function __construct()
    {
        require_once("conexion.php");
        $this->con = conectar::conexion();
    }

    public function get_usuario($nombre, $apellido, $correo, $password, $direccion, $telefono)
    {
        $sql = "SELECT * FROM usuario WHERE nombre LIKE '%$nombre%' and WHERE apellido LIKE '%$apellido%' and WHERE correo = '$correo' and WHERE password = '$password' and WHERE direccion = '$direccion' and WHERE telefono = 'telefono'";
        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_array($query);
        return $result;
    }
}

?>
