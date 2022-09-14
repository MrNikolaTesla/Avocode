<?php
class RegistroUsuario_modelo
{

    private $con;

    public function __construct()
    {
        require_once("conexion.php");
        $this->con = conectar::conexion();
    }

    public function set_cliente($nombre, $apellido, $correo, $password, $direccion, $telefono, $tipo)
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
}

?>