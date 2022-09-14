<?php
class Eliminar_usuario{

    private $con;

    public function __construct() {
    require_once("conexion.php");
    $this->con=conectar::conexion();
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

    }
?>