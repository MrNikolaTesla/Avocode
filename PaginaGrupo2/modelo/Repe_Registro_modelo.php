<?php
class Repe_Registro_modelo
{

    private $con;

    public function __construct()
    {
        require_once("conexion.php");
        $this->con = conectar::conexion();
    }

    public function get_correo($correo)
    {
        $sql = "SELECT * FROM usuario WHERE correo = '$correo'";
        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_array($query);
        return $result;
    }

    public function get_usuario($id, $nombre, $apellido, $correo, $password, $direccion, $telefono)
    {
        $sql = "SELECT * FROM usuario WHERE nombre LIKE '%$nombre%' and apellido LIKE '%$apellido%' and correo = '$correo' and password = '$password' and direccion = '$direccion' and telefono = 'telefono'";
        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_array($query);
        $verificacion = "SELECT * FROM usuario WHERE id_usuario = '$id'";
        $query_veri = mysqli_query($this->con, $verificacion);
        $veri = mysqli_fetch_array($query_veri);
        if($veri['id_usuario'] == $id && $correo == $veri['correo']){
            $repetido = 2;
        return $repetido;
    }else if ($veri['id_usuario'] != $id && $correo == $veri['correo']){
        $repetido = 1;
        return $repetido;
    }else{
        $repetido = 2;
        return $repetido;
    }
    }
}

?>
