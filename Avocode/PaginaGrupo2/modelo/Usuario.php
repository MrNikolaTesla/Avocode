<?php
class Usuario
{

    private $con;
    private $usuario;

    public function __construct()
    {
        require_once("../modelo/conexion.php");
        $this->con = Conectar::conexion();
        $this->usuario = array();
    }

    public function listar_usuarios()
    {

        $sql = "SELECT * FROM usuario";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)) {
            $this->usuario[] = $filas;
        }

        return $this->usuario;
    }

    public function get_correo($correo)
    {
        $sql = "SELECT * FROM usuario WHERE correo = '$correo'";
        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_array($query);
        return $result;
    }

    public function get_usuario($id, $nombre, $apellido, $correo, $direccion, $telefono)
    {
        $sql = "SELECT * FROM usuario WHERE nombre LIKE '%$nombre%' and apellido LIKE '%$apellido%' and correo = '$correo' and direccion = '$direccion' and telefono = 'telefono'";
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

    public function set_usuario($nombre, $apellido, $correo, $password, $direccion, $telefono, $tipo)
    {
        $permiso = $_SESSION['tipo'];
        if($tipo == "administrador" || $tipo == "empleado" && $permiso == "empleado"){
        $estado=2;
        return $estado;
        }else{
        $sql = "INSERT INTO usuario (nombre, apellido, correo, password, direccion, telefono, tipo) VALUES ('$nombre', '$apellido', '$correo', '$password', '$direccion', '$telefono', '$tipo')";
        $query = mysqli_query($this->con, $sql);
        $estado=1;
        return $estado;
        }
    }

    public function set_cliente ($nombre, $apellido, $correo, $password) {
        $sql = "INSERT INTO usuario (nombre, apellido, correo, password) VALUES ('$nombre', '$apellido', '$correo', '$password')";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function get_data()
    {
        $id = $_SESSION['mod_usuario'];
        $sql = "SELECT * FROM usuario WHERE id_usuario = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function eliminar_usuario ($id) {
        session_start(); 
        $permiso = $_SESSION['tipo'];
        $id_personal = $_SESSION['id'];
        $verificacion = "SELECT * FROM usuario WHERE id_usuario = '$id'";
        $query_veri = mysqli_query($this->con, $verificacion);
        $tipo = mysqli_fetch_array($query_veri);
    
        if($id_personal == $id){
            $estado=2;
            return $estado;
    
            }else if($tipo['tipo'] == "administrador" || $tipo['tipo'] == "empleado" && $permiso == "empleado"){
            $estado=0;
            return $estado;
            
        }else{
            $sql = "DELETE FROM usuario WHERE id_usuario = $id";
                $query = mysqli_query($this->con, $sql);
                $estado=1;
                return $estado;
        }
    }

    public function update_usuario ($id, $nombre, $apellido, $correo, $direccion, $telefono, $tipo) {
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
        $sql = "UPDATE usuario set nombre = '$nombre', apellido = '$apellido', correo = '$correo', direccion = '$direccion', telefono = '$telefono', tipo = '$tipo' WHERE id_usuario = $id";
        $query = mysqli_query($this->con,$sql);
        $estado=2;
        return $estado;
        }else if($tipo_veri['tipo'] == "cliente" && $permiso == "empleado" && $tipo=="administrador"){
        $tipo = "cliente";
        $sql = "UPDATE usuario set nombre = '$nombre', apellido = '$apellido', correo = '$correo', direccion = '$direccion', telefono = '$telefono', tipo = '$tipo' WHERE id_usuario = $id";
        $query = mysqli_query($this->con,$sql);
        $estado=3;
        return $estado;
        }else{
            $sql = "UPDATE usuario set nombre = '$nombre', apellido = '$apellido', correo = '$correo', direccion = '$direccion', telefono = '$telefono', tipo = '$tipo' WHERE id_usuario = $id";
            $query = mysqli_query($this->con,$sql);
            $estado=1;
            return $estado;
        }
    }
    
}

?>