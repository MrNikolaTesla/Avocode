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
        $sql = "SELECT * FROM usuario WHERE nombre LIKE '%$nombre%' and apellido LIKE '%$apellido%' and correo = '$correo' and password = '$password' and direccion = '$direccion' and telefono = 'telefono'";
        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_array($query);
        return $result;
    }
}

?>
