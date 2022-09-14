<?php
class ActualizarUsuario_modelo{

    private $con;

    public function __construct() {
    require_once("conexion.php");
    $this->con=conectar::conexion();
    }

    public function update_usuario ($id, $nombre, $apellido, $correo, $password, $direccion, $telefono, $tipo) {
    $permiso = $_SESSION['tipo'];
    $id_personal = $_SESSION['id'];
    $verificacion = "SELECT * FROM usuario WHERE id_usuario = '$id'";
    $query_veri = mysqli_query($this->con, $verificacion);
    $tipo_veri = mysqli_fetch_array($query_veri);
    if($tipo_veri['tipo'] == "administrador" || $tipo_veri['tipo'] == "empleado" && $permiso == "empleado" && $id_personal != $tipo_veri['id_usuario']){
        $estado=0;
        return $estado;
        }else if($tipo_veri['tipo'] == "empleado" && $permiso == "empleado" && $tipo=="administrador"){
            $tipo = "empleado";
    $sql = "UPDATE usuario set nombre = '$nombre', apellido = '$apellido', correo = '$correo', password  = '$password', direccion = '$direccion', telefono = '$telefono', tipo = '$tipo' WHERE id_usuario = $id";
    $query = mysqli_query($this->con,$sql);
    $estado=2;
    return $estado;
}else if($tipo_veri['tipo'] == "cliente" && $permiso == "empleado" && $tipo=="administrador"){
    $tipo = "cliente";
    $sql = "UPDATE usuario set nombre = '$nombre', apellido = '$apellido', correo = '$correo', password  = '$password', direccion = '$direccion', telefono = '$telefono', tipo = '$tipo' WHERE id_usuario = $id";
    $query = mysqli_query($this->con,$sql);
    $estado=3;
    return $estado;
    }else{
        $sql = "UPDATE usuario set nombre = '$nombre', apellido = '$apellido', correo = '$correo', password  = '$password', direccion = '$direccion', telefono = '$telefono', tipo = '$tipo' WHERE id_usuario = $id";
        $query = mysqli_query($this->con,$sql);
        $estado=1;
        return $estado;
    }
    }
    }

?>