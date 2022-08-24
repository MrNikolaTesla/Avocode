<?php
class Inicio_usuario{

    private $con;

    public function __construct() {
    require_once("modelo/conexion.php");
    $this->con=conectar::conexion();
    }

    public function verify_user ($correo, $contraseña) {
        $query_correo = "SELECT * FROM usuarios WHERE correo = '$correo'";
        $correo_captado = mysqli_query($this->con, $query_correo);
        if($correo_captado){
            $id = $correo_captado['id'];
            $nombre = $correo_captado['nombre'];
            $apellidos = $correo_captado['apellido'];
        }
        $query_contraseña = "SELECT * FROM datos WHERE password = '$contraseña' AND id = '$id'";
        $contraseña_captado = mysqli_query($this->con, $query_contraseña);
        if($contraseña_captado){
            return $contraseña_captado;
        }else{
            header("Location: ../vista/FormularioInicioSesion.php");
        }
    }

    }
?>