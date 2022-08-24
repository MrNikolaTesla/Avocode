<?php
class Inicio_usuario{

    private $con;
    public $correo_concuerda=null;
    public $contraseña_concuerda=null;

    public function __construct() {
    require_once("conexion.php");
    $this->con=conectar::conexion();
    }

    public function verify_user ($correo, $contraseña) {
        $query_correo = "SELECT * FROM usuario WHERE correo = '$correo'";
        $correo_captado = mysqli_query($this->con, $query_correo);
        $correo_concuerda = mysqli_fetch_array($correo_captado);
        if($correo_concuerda!=null){
            $id = $correo_concuerda['id'];
            $nombre = $correo_concuerda['nombre'];
            $apellidos = $correo_concuerda['apellido'];
        
        $query_contraseña = "SELECT * FROM usuario WHERE password = '$contraseña' AND id = '$id'";
        $contraseña_captado = mysqli_query($this->con, $query_contraseña);
        $contraseña_concuerda = mysqli_num_rows($contraseña_captado);
        if($contraseña_concuerda!=null){
            return $contraseña_concuerda;
        }else{

        }
    }
    }

    }
?>