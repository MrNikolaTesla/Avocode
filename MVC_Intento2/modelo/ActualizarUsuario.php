<?php
class ActualizarUsuario_modelo{

    private $con;

    public function __construct() {
    require_once("conexion.php");
    $this->con=conectar::conexion();
    }

    public function update_usuario ($id, $nombre, $apellido, $correo, $password, $direccion, $telefono, $tipo) {

    $sql = "UPDATE usuario set nombre = '$nombre', apellido = '$apellido', correo = '$correo', password  = '$password', direccion = '$direccion', telefono = '$telefono', tipo = '$tipo' WHERE id = '$id'";
    $query = mysqli_query($this->con,$sql);
    return $query;
    }

    }
?>